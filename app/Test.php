<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // Mass assignment protection
    protected $fillable = ['name', 'description', 'instructions', 'group_id'];

    // Date enablement
    protected $dates = [
        'created_at',
        'updated_at',
        'due_at'
    ];


    public function groups()
    {
    	return $this->belongsToMany('App\Group');
    }

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
