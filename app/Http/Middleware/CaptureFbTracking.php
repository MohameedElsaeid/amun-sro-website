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
        $reader = new Reader(storage_path('app/geoip/GeoLite2-City.mmdb'));
        $ip = $request->ip();
        try {
            $record = $reader->city($ip);
            $request->attributes->set('geo', [
                'country' => $record->country->isoCode,
                'city'    => $record->city->name,
                'latitude'=> $record->location->latitude,
                'longitude'=> $record->location->longitude,
            ]);
            Log::channel('header')->info('Request Headers:', [
                'country' => $record->country->isoCode,
                'city'    => $record->city->name,
                'latitude'=> $record->location->latitude,
                'longitude'=> $record->location->longitude,
            ]);
        } catch (\Exception $e) {
            // Handle exception or set defaults
            $request->attributes->set('geo', null);
        }


        // Retrieve existing tracking data from session or start fresh.
        $tracking = session()->get('fb_tracking', []);

        // If fbclid is available in the query string, capture it.
        if ($fbclid = $request->query('fbclid')) {
            $tracking['fbclid'] = $fbclid;
            // Prefer to use the _fbc cookie if available.
            if ($request->hasCookie('_fbc')) {
                $tracking['fbc'] = $request->cookie('_fbc');
            } elseif (empty($tracking['fbc'])) {
                // If _fbc is not already stored, format it using fbclid.
                $tracking['fbc'] = $this->formatFbc($fbclid);
            }
        } else {
            // If fbclid is not in the URL, but the _fbc cookie exists, store it.
            if ($request->hasCookie('_fbc')) {
                $tracking['fbc'] = $request->cookie('_fbc');
            }
        }

        // Optionally capture _fbp if passed in query or available as a cookie.
        if ($fbp = $request->query('_fbp')) {
            $tracking['fbp'] = $fbp;
        } elseif ($request->hasCookie('_fbp')) {
            $tracking['fbp'] = $request->cookie('_fbp');
        }

        // Capture the client's IP address and user agent.
        $tracking['client_ip_address'] = $request->ip();
        $tracking['client_user_agent'] = $request->header('User-Agent');

        // Save tracking data into session.
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
        // Use the current time in milliseconds.
        $creationTime = round(microtime(true) * 1000);
        // Assuming a subdomain index of 1 for your domain.
        return "fb.1.{$creationTime}.{$fbclid}";
    }
}
