<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    */
    protected $fillable = [
        
    ];


    /**
     * gets the team a department belongs to.
     * @return App\Model\District
    */
    public function district()
    {
        return $this->belongsTo('App\Model\District');
    }


    /**
     * gets the member details for the head of this department
     * @return App\Model\Member
    */
    public function head()
    {
        return $this->hasOne('App\Model\Member');
    }


    /**
     * gets the zones that belong to a community
     * @return App\Model\Zone
    */
    public function zones()
    {
        return $this->hasMany('App\Model\Zone');
    }
}
