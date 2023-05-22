<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\RegisterRequest;
use Validator;

class RegisterController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, Response $response)
    {
        // 初回アクセス時の処理
        $data = [
            'msg' => 'フォームを入力してください',
        ];
        return view('register', $data);
    }

    public function post(RegisterRequest $request)
    {    
        return view('register', ['msg' => 'メッセージは正しく入力されました']);
    }
}