<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
       if(Auth::check() && Auth::user()->isAdmin()){
            return $next($request);
        }
        return redirect('home');
    }

}
