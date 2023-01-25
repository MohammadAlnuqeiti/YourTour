<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['movie_name', 'movie_description', 'movie_genre'];

    public function trip()
    {


        return $this->hasMany(Trip::class, 'category_id');
    }
}
