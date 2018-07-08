<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Manages crud, relationships and service for Districts
*/

class District extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    */
    protected $fillable = [
        
    ];


    /**
     * gets all the communities that belong to a district.
     * @return App\Model\Community
    */
    public function communities()
    {
        return $this->hasMany('App\Model\Community');
    }


    /**
     * gets the member details for the head of this district
     * @return App\Model\Member
    */
    public function Head()
    {
        return $this->hasOne('App\Model\Member');
    }
}
