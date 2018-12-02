<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tissue extends Model
{
  // Fillable attributes 
	protected $fillable = ['name', 'content', 'description', 'slug'];
	
  // Static functions
  public static function rules() { 
    return [
      'name'=>'required|max:191',
      'tissue_type_id'=>'required',
      'zone_id'=>'required',
      'content'=>'required',
      'description'=>'required',
    ];
  }
  
  // relationships
  public function tissue_type()
  {
    return $this->belongsTo('App\TissueType');
  }

  // methods
  
  public static function getMuscles()
  {
    return Tissue::whereIn('tissue_type_id', TissueType::muscleTypes()->pluck("id"));
  }

  public static function getBones()
  {
    return Tissue::whereIn('tissue_type_id', TissueType::boneTypes()->pluck("id"));
  }

  public static function byName($name)
  {
    return Tissue::where('name', 'like', '%' . $name . '%');
  }

  public static function search($query = nil)
  {
    if (isset($query))
      return Tissue::byName($query)->paginate(10);
    else
      return Tissue::paginate(10);
  }

  public static function getMusclesByName($name)
  {
    return Tissue::getMuscles()->where('name', 'like', '%' . $name . '%');
  }

  public static function searchMuscles($query = null)
  {
    if (isset($query))
      return Tissue::getMusclesByName($query)->paginate(10);
    else
      return Tissue::getMuscles()->paginate(10);
  }

  public static function getBonesByName($name)
  {
    return Tissue::getBones()->where('name', 'like', '%' . $name . '%');
  }

  public static function searchBones($query = null)
  {
    if (isset($query))
      return Tissue::getBonesByName($query)->paginate(10);
    else
      return Tissue::getBones()->paginate(10);
  }

  public function store($request)
  {
    //Slug construction
    if (!isset($this->id)) {
      $slug = str_replace(' ', '_', $request->name);
      $slugFlag = Tissue::where('slug', $slug)->get();
      
      if ($slugFlag->count() > 0) {
        $slug = str_replace(' ', '_', $request->name).'_'.($slugFlag->count()+1);
      }
      $this->slug = $slug;
    }

    $this->name = $request->name;
    $this->tissue_type_id = $request->tissue_type_id;
    $this->zone_id = $request->zone_id;
    $this->content = $request->content;
    $this->description = $request->description;
    $this->save();
  }
}
