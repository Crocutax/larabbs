<?php

namespace App\Http\Middleware;

use App;
use Closure;

class ChangeLocale
{
    public function handle($request, Closure $next)
    {
        $language = $request->header('accept-language');
        if ($language) {
            App::setLocale($language);
        }

        return $next($request);
    }
}
