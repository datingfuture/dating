<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersPhoto extends Model
{
    //
    protected $table = 'users_photos';
    protected $primaryKey = 'id';
    protected $fillable=['image','user_id','username'];
}
