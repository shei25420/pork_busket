<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponder;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    use ApiResponder;
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        return $this->fail('Unauthenticated', 403);
        // if (! $request->expectsJson()) {
        //     return route('login');
        // }
    }
}
