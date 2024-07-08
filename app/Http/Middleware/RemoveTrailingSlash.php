<?php

namespace App\Http\Middleware;

use Closure;

class RemoveTrailingSlash
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $uri = $request->getRequestUri();

        if ($uri !== '/' && substr($uri, -1) === '/') {
            return redirect(rtrim($uri, '/'), 301);
        }

        return $next($request);
    }
}
