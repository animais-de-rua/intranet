<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class RapidAPIValidation
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
        $rapidAPI = $_SERVER['HTTP_X_RAPIDAPI_PROXY_SECRET'] ?? null;
        $referer = parse_url($request->headers->get('referer'), PHP_URL_HOST);
        $app_url = parse_url(config('app.url'), PHP_URL_HOST);

        // Own requests are accepted
        if($referer === $app_url) {
            return $next($request);
        }

        // Rapid API secret validation
        if (!$rapidAPI || $rapidAPI !== config('app.rapid_api_secret')) {
            return \Response::json([
                'message' => 'Missing RapidAPI proxy secret. Go to https://rapidapi.com/promatik/api/animais-de-rua to learn how to get your API application key.',
            ]);
        }

        return $next($request);
    }
}
