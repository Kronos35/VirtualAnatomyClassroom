<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tissue extends Model
{
    //Fillable attributes
	protected $fillable = ['name', 'content', 'description'];
	/**
     * Get all of the post's comments.
     */
    public function tissue_type()
    {
        return $this->belongsTo('App\TissueType');
    }
}
