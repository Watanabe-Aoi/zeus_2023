<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GreetMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->lang;
        if(!in_array($lang, ['ja', 'en', 'fr'])) {
            // リクエストパラメータにerrMessを追加
            $request->merge([
                'isError' => true,
            ]);
        }
        return $next($request);
    }
}
