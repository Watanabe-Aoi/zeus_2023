<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        // $data = [
        //     ['name'=>'taro', 'mail'=>'taro@yamada'],
        //     ['name'=>'hanako', 'mail'=>'hanako@flower'],
        //     ['name'=>'sachiko', 'mail'=>'sachiko@happy'],
        // ];
        // $request->merge(['data'=>$data]);
        // return next($request); // ☆次のレイヤに移る処理
        $response = $next($request);
        $content = $response->content();

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content);
        return $response;
    }
    // 
}
