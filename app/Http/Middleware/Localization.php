<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
       
            return $next($request);
       
    }
}