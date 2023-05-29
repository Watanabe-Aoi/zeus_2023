<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCatalog extends Model
{
    use HasFactory;
    protected $primaryKey = 'book_id';
    protected $keyType = '';
    protected $guarded = [];
}
