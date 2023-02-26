<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'users_profiles';


    /* обратное отнош. с User */
    public function UserProfile()
    {
        //return $this->belongsTo('App\User','user_id','id');
		return $this->belongsTo('App\UserPrifile','id','user_id','name','photo');
    }
}
