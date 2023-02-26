<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Notlikes extends Model
{
    protected $table = 'notlikes';
    protected $fillable = ['user_id','post_id','name','title','like','notlike'];
}