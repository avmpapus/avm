<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Collection extends Model
{
    protected $table = 'collection';
    protected $fillable = ['user_id','name','image','price'];
}