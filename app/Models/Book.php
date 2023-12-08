<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    //$table, $primaryKey, $fillable
    protected $table='books';
    protected $primaryKey='book_id';
    protected $fillable=[
        'id',
        'author',
        'title'
    ];
}
