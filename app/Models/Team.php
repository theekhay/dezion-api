<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Manages CRUD for teams
*/

class Team extends Model
{

    use SoftDeletes;

    /**
    * The attributes that are mass assignable.
    *
    */
    protected $fillable = [
        
    ];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
    */
    protected $dates = ['deleted_at'];


    /**
     * gets all the departments that belong to a team.
     * @return App\Model\Department
    */
    public function departments()
    {
        return $this->hasMany('App\Model\Department');
    }


    /**
     * gets the member details for the head of this team
     * @return App\Model\Member
    */
    public function Head()
    {
        return $this->hasOne('App\Model\Member');
    }
}
