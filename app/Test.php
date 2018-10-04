<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // Mass assignment protection
    protected $fillable = ['name', 'description', 'instructions', 'image', 'due_at'];

    // Date enablement
    protected $dates = [
        'created_at',
        'updated_at',
        'due_at'
    ];

    const VALIDATION_RULES = [
        'name'=>'required|max:191',
        'description'=>'required',
        'instructions'=>'required',
        'due_at'=>'required',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function groups()
    {
    	return $this->belongsToMany('App\Group');
    }

    public function questions()
    {
        return $this->belongsToMany('App\Question');
    }
}
