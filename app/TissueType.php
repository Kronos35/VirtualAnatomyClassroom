<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TissueType extends Model
{
    //
    protected $fillable = ['name', 'tissue_type_id', 'description'];
    /**
     * Get all of the owning tissues models.
     */
    public function tissues()
    {
        return $this->hasMany('App\Tissue');
    }
    public function tissue_types()
    {
        return $this->hasMany('App\TissueType');
    }
    public function tissue_type()
    {
        return $this->belongsTo('App\TissueType');
    }
}
