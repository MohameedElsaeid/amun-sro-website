<?php

namespace App\Http\Middleware;

use App\Models\Visit;
use Closure;
use Exception;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Log;
use MaxMind\Db\Reader\InvalidDatabaseException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class CaptureFbTracking
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @return Response
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     * @throws InvalidDatabaseException
     */
    public function handle(Request $request, Closure $next): Response
    {
        $reader = new Reader(storage_path('geoip/GeoLite2-City.mmdb'));
        $tracking = session()->get('fb_tracking', []);
        $ip = $request->ip();

        // Handle Facebook-specific parameters
        if ($fbclid = $request->query('fbclid')) {
            $tracking['fbclid'] = $fbclid;
            if ($request->hasCookie('_fbc')) {
                $tracking['fbc'] = $request->cookie('_fbc');
            } elseif (empty($tracking['fbc'])) {
                $tracking['fbc'] = $this->formatFbc($fbclid);
            }
        } else {
            if ($request->hasCookie('_fbc')) {
                $tracking['fbc'] = $request->cookie('_fbc');
            }
        }

        if ($fbp = $request->query('_fbp')) {
            $tracking['fbp'] = $fbp;
        } elseif ($request->hasCookie('_fbp')) {
            $tracking['fbp'] = $request->cookie('_fbp');
        }

        // Store client info
        $tracking['client_ip_address'] = $ip;
        $tracking['client_user_agent'] = $request->header('User-Agent');

        // Attempt to capture geo-information
        try {
            $record = $reader->city($ip);
            $tracking['ct'] = $record->city->name;
            $tracking['country'] = $record->country->isoCode;
            if (!is_null($record->postal->code)) {
                $tracking['zp'] = $record->postal->code;
            }
            $tracking['st'] = $record->mostSpecificSubdivision->name;
        } catch (Exception $e) {
            // Log the exception for debugging purposes
            Log::error('GeoIP lookup failed: ' . $e->getMessage());
            // In case of any issues, keep the tracking info intact
        }

        // Capture and store all incoming query parameters
        $allQueryParams = $request->query();
        $attributionData = [];
        if (isset($allQueryParams['campaign_id'])) {
            $attributionData['campaign'] = $allQueryParams['campaign_id'];
        }

        if (isset($allQueryParams['ad_set_id'])) {
            $attributionData['ad_set'] = $allQueryParams['ad_set_id'];
        }

        if (isset($allQueryParams['ad_id'])) {
            $attributionData['ad'] = $allQueryParams['ad_id'];
        }

        $tracking['attribution'] = $attributionData;

        ksort($allQueryParams);
        $tracking['query'] = $allQueryParams;

        // Capture UTM parameters separately
        $utmParams = array_filter($allQueryParams, function ($key) {
            return str_starts_with($key, 'utm_');
        }, ARRAY_FILTER_USE_KEY);
        ksort($utmParams);

        $tracking['utm'] = array_merge($utmParams, ['visit_time' => time()]);
        Visit::create([
            'fbclid' => $tracking['fbclid'] ?? null,
            'fbc' => $tracking['fbc'] ?? null,
            'fbp' => $tracking['fbp'] ?? null,
            'client_ip_address' => $tracking['client_ip_address'] ?? null,
            'client_user_agent' => $tracking['client_user_agent'] ?? null,
            'ct' => $tracking['ct'] ?? null,
            'country' => $tracking['country'] ?? null,
            'st' => $tracking['st'] ?? null,
            // UTM columns
            'utm_ad_id' => $utmParams['utm_ad_id'] ?? null,
            'utm_adset_id' => $utmParams['utm_adset_id'] ?? null,
            'utm_campaign' => $utmParams['utm_campaign'] ?? null,
            'utm_campaign_id' => $utmParams['utm_campaign_id'] ?? null,
            'utm_medium' => $utmParams['utm_medium'] ?? null,
            'utm_source' => $utmParams['utm_source'] ?? null,
            // Query columns
            'query_fbclid' => $allQueryParams['fbclid'] ?? null,
            'query_utm_ad_id' => $allQueryParams['utm_ad_id'] ?? null,
            'query_utm_adset_id' => $allQueryParams['utm_adset_id'] ?? null,
            'query_utm_campaign' => $allQueryParams['utm_campaign'] ?? null,
            'query_utm_campaign_id' => $allQueryParams['utm_campaign_id'] ?? null,
            'query_utm_medium' => $allQueryParams['utm_medium'] ?? null,
            'query_utm_source' => $allQueryParams['utm_source'] ?? null,
            'visit_time' => $tracking['utm']['visit_time'] ?? time(),
        ]);

        session()->put('fb_tracking', $tracking);
        return $next($request);
    }

    /**
     * Format the fbc parameter based on Facebook guidelines.
     *
     * Example format: fb.1.creationTime.fbclid
     */
    protected function formatFbc($fbclid): string
    {
        $creationTime = round(microtime(true) * 1000);
        return "fb.1.{$creationTime}.{$fbclid}";
    }
}
