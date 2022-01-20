<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class StudentLogin
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
        if(Session::get('student_id'))
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('user-login');
        }
    }
}
