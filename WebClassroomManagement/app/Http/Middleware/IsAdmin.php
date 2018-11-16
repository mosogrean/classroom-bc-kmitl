<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        if ($this->isNotAdmin()) {
            return redirect('/');
        }
        return $next($request);
    }

    /**
     * @return bool
     */
    protected function isNotAdmin(): bool {
        return !optional(Auth::user())->is_admin;
    }

}
