<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premier extends Model
{
    protected $primaryKey = 'premier_id';
    protected $table= 'premieres';
    protected $fillable = ['movie_id'];
}
