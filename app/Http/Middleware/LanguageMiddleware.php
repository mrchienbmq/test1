<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/2/18
 * Time: 7:19 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next, $guard = null)
    {
        if(Session::has('lang')){
            App::setLocale(Session::get('lang'));
        }
        return $next($request);
    }
}