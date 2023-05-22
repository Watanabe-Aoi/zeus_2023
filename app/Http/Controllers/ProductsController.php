<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $request){    // トップページ
        $data = [
            'products' => Product::with('user')->get(),   // リレーションと一緒にインスタンスを取得
        ];

        return view('products', $data);
    }

    public function add(Request $request){   // POST:商品追加
        $this->validate($request, Product::$rules); // バリデーション
        
        $new_product = new Product();
        $forms = $request->all();       // 全リクエストパラメータを取得
        unset($forms['_token']);        // csrfトークン情報を消す(データテーブルにない情報だから)
        $new_product->fill($forms)->save();     // インスタンスにパラメータ突っ込む -> 保存(insertと同じ)
        return redirect('/products');   // 商品一覧ページへリダイレクト
    }

    public function edit(Request $request){  // GET:商品情報編集画面へ
        $product_id = $request->product_id;

        $product = Product::where('product_id', $product_id)->first();  // DBクラス継承したEloquent使用
        $data = [
            'product' => $product,
        ];
        return view('product_detail', $data);
    }

    public function update(Request $request){   // POST:商品情報更新
        $this->validate($request, Product::$rules);     // バリデーション
        $product = Product::where('product_id', $request->product_id)->first();     // インスタンス検索・取得
        $forms = $request->all();
        unset($forms['_token']);
        $product->fill($forms)->save(); // save:'upsert'(update+insert)->キーが無ければ新規、あれば上書き
        return redirect('/products');
    }

    public function delete(Request $request){
        $product_id = $request->product_id;
        Product::where('product_id', $product_id)->delete();
        return redirect('/products');
    }

}
