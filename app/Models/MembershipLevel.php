<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * This manages the different mambership types
 * e.g first-timers, second-timers, new-converts, members  etc.
 * If there is a need to create a new membership type, this is the class that would handle that 
*/
class MembershipLevel extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    */
    protected $fillable = [
        
    ];


    /**
    * Get all the members that belong to a  membership level.
    * @return App\Models\Member
    */
    public function members()
    {
        return $this->hasMany('app\Models\Members') ;
    }
}

