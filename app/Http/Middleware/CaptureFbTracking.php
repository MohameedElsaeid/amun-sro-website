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

        $tracking['client_ip_address'] = $request->ip();
        $tracking['client_user_agent'] = $request->header('User-Agent');


        try {
            $record = $reader->city($ip);
            $tracking['ct'] = $record->city->name;
            $tracking['country'] = $record->country->isoCode;
            if (!is_null($record->postal->code)){
                $tracking['zp'] = $record->postal->code;
            }
            $tracking['st'] =  $record->mostSpecificSubdivision->name;
            Log::channel('header')->info($tracking);
            session()->put('fb_tracking', $tracking);
        } catch (\Exception $e) {
            session()->put('fb_tracking', $tracking);
        }




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
