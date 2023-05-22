<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests\GreetRequest;

use App\Http\Services\LanguageService;

class HelloController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Response $response)
    {
        // $data = [ 'data' => $request['data'] ];
        // phpinfo();
        dd(\DB::select('select * from products'));
        return view('hello');
    }

    public function greet(GreetRequest $request)
    {
        // リクエストから値受け取り
        $lang = $request->lang;

        // 挨拶取得
        $ls = new LanguageService();
        $greet = $ls->getGreeting($lang);

        // bladeに渡す値を連想配列で定義
        $data = [
            'greeting' => $greet,
        ];

        // html(blade)を返す(引数は第２引数へ)
        return view('greet', $data);
    }

    public function search(Request $request, Response $response)
    {
        return view('greeting_search');
    }
}
