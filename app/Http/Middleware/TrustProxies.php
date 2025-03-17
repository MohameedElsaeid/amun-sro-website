<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Middleware\TrustHosts as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrustProxies extends Middleware
{

    /**
     * The trusted proxies for this application.
     *
     * You can set this to '*' to trust all proxies, which might be useful if you are behind a load balancer (e.g., DigitalOcean load balancer).
     *
     * @var array|string|null
     */
    protected string|array|null $proxies = '*';

    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, $next): Response
    {
        return $next($request);
    }
}
