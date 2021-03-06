<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Manages the members in the different membership levels
 * This is the class that manages crud for members in different membership levels.
*/

class Member extends Model
{
    /**
    * The attributes that are not mass assignable.
    *
    */
    protected $guarded = [
        'membership_level'
    ];

    //uncomment the code below if the associated table name is not the same as the class name
    //protected $table = 'custom_products';


    /**
    * retursn the membership level of a member.
    * @return App\Models\MembershipLevel
    */
    public function fullname()
    {
        return $this->firstname. " ".$this->lastname ;
    }

    /**
    * retursn the membership level of a member.
    * @return App\Models\MembershipLevel
    */
    public function membership_level()
    {
        return $this->belongsTo('app\Models\MembershipLevel') ;
    }


    /**
    * returns the assimlation history of a member
    * @return App\Models\MemberAssimilation
    */
    public function assimilationHistory()
    {
        return $this->hasMany('app\Models\MemberAssimilation'); 
    }
}
