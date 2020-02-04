<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $primaryKey = 'movie_id';
    protected $table= 'movies';
    protected $fillable = ['name','cover_page','description','launching'];
}
