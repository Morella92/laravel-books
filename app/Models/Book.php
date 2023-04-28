<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'copies_number',
        'editor',
        'genre_id'
    ];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
