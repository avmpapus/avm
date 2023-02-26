<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['user_id','name','title','email','post','htmlpost','spelling','image'];
}