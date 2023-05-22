<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    protected $keyType = 'string';
    
    protected $guarded = [];    // ユーザーに入力させないフィールド：空でも必要な変数 
    // protected $fillable = [];    // <- ユーザーが入力できる項目（ホワイトリスト的な） 
    
    public static $rules = [    // バリデーション
        'product_name' => 'required',
        'price' => 'numeric|min:0',
    ];

    public function user(){     // ユーザーの情報取得
        return $this->belongsTo('App\Models\User');
    }

    public function scopeExpensive ($query) {
        return $query->where('price', '>', 100000);
    }

    public function getTaxAttribute() {     // アクセサメソッド（呼び出し：get ~ Attribute(); <-Camel）
        return $this->price / 10;
    }
}
