<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'book_catalog';

    protected $primaryKey = 'book_id';


    protected $guarded = [];

    // public function rules() {
    //     return [
            
    //     ];
    // }
}