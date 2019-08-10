<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Reply extends Model
{
    //
   public static function newReplyCount(){
        $receiver_id = Auth::user()->id;
        $newReplyCount = Reply::where(['receiver_id'=>$receiver_id,'viewed'=>0])->count();
        return $newReplyCount;  
    }


}
