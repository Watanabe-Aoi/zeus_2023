<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'book_id';
    protected $keyType = 'string';

    protected $guarded = [];

    public function rules() {
        return [
            
        ];
    }
}
