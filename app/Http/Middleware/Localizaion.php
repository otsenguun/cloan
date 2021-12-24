<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use Config;
use App;

class Localizaion
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

        if (session()->has('locale')) {
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }
}
