<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Image extends Model
{
    protected $table = 'img';
    protected $fillable = ['image','description','url'];
}