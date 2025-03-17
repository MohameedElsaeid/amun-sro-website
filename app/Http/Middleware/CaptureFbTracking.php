<?php

namespace App\Http\Middleware;

use Closure;
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
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('GeoIP lookup failed: ' . $e->getMessage());
            // In case of any issues, keep the tracking info intact
        }

        // Capture and store all incoming query parameters
        $allQueryParams = $request->query();
        ksort($allQueryParams);
        $tracking['query'] = $allQueryParams;

        // Capture UTM parameters separately
        $utmParams = [];
        foreach ($allQueryParams as $key => $value) {
            if (strpos($key, 'utm_') === 0) {
                $utmParams[$key] = $value;
            }
        }
        ksort($utmParams);
        $tracking['utm'] = $utmParams;

        Log::channel('header')->info($tracking);
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
