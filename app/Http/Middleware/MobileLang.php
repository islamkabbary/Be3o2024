<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->wantsJson()) {
            if (isset($request->header()['accept-language'][0])) {
                app()->setLocale($request->header()['accept-language'][0]);
            } else {
                app()->setLocale('ar');
            }
        }
        return $next($request);
    }
}
