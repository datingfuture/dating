<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return $this->admin;
    }

     public function details(){
        return $this->hasOne('App\UsersDetail','user_id');
    }


    public static function filloutformProfileExists($user_id){
        $filloutformCount = UsersDetail::select('user_id','status')->where(['user_id'=>$user_id,'status'=>1])->count();

        // echo $filloutformCount; die;

        
        return $filloutformCount;
    }


    public static function filloutformProfileDetails($user_id){
        $filloutformContent = UsersDetail::where('user_id',$user_id)->first();
        return $filloutformContent;
    }

    public function photos(){

        return $this->hasMany('App\UsersPhoto','user_id');
    }


   public static function getNameofsender($user_id){
        $getNameofsender = User::select('name')->where('id',$user_id)->first();
        return $getNameofsender->name;
    }

    public static function getCityofsender($user_id){
        $getCityofsender = UsersDetail::select('city')->where('user_id',$user_id)->first();
        return $getCityofsender->city;
    }



    public static function getUsernameofuser($user_id){
        $getUsernameofuser = User::select('username')->where('id',$user_id)->first();
        return $getUsernameofuser->username;
    }


































}
