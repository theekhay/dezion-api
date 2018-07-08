<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * controls CRUD for departments
 * Every department belongs to a team
 * And departments have workers under them
*/
class Department extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    */
    protected $fillable = [
        
    ];


    /**
     * Defines the relationship between department model and team model
     * Gets the team a department belongs to
     * @return App\Models\Team
     */  
    public function Team()
    {
        return $this->belongsTo('App\Models\Team');
    }


    /**
     * Defines the relationsip between department and smallGroup
     * Gets the smallGroups in a department.
     * @return App\Models\SmallGroup
     * 
    */
    public function Workers()
    {
        return $this->hasMany('App\Models\SmallGroup');
    }


}
