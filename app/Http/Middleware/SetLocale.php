<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;

class SetLocale
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
        Session::put('locale', $request->segment(1));
        App::setLocale($request->segment(1));
        $request->route()->forgetParameter('locale');
        return $next($request);
    }
}
