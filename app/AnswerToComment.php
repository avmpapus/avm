<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerToComment extends Model
{
 protected $table = 'answer_to_comment';
    protected $fillable = ['user_id','post_id','comment_id','name','title','image'];
}
