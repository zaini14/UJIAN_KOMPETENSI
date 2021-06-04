<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Session;

class cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('siswaId')) {
            return redirect('/user_login');
        }
        return $next($request);
    }
}
