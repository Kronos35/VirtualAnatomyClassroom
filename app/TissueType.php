<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TissueType extends Model
{
  //
  protected $fillable = ['name', 'tissue_type_id', 'description'];

  // Constants
  const BONE_TYPES = [ "bones", "huesos" ];
  const MUSCLE_TYPES = [ "musculos", "musculos-estriados", "musculos-lisos", "musculos-cardiacos", "musculos-esqueléticos", "muscles", "striated-muscles", "smooth-muscles", "cardiac-muscles", "skeletal-muscles", ];

  public static function muscleTypes()
  {
    return TissueType::whereIn('slug', TissueType::MUSCLE_TYPES);
  }

  public static function boneTypes()
  {
    return TissueType::whereIn('slug', TissueType::BONE_TYPES);
  }

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
