<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function post()
    {
        return $this->belongsTo('App\Employee','post_id','id');
    }


    /* обратное отнош. с User */
    public function Comment()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
