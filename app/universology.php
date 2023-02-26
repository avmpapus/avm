<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class universology extends Model
{
    protected $table = 'universology';
    protected $fillable = ['user_id','name','title','email','htmlpost','spelling','url','image'];
}