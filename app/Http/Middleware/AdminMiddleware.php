<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponder;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    use ApiResponder;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() && auth()->user()->role_id !== 1) return $this->fail('Unauthorized', 401);
        return $next($request);
    }
}
