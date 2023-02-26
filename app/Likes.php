<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class likes extends Model
{
    protected $table = 'likes';
    protected $fillable = ['user_id','post_id','name','title','like','notlike'];
}