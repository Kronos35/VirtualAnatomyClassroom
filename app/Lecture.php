<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
  // Fillable attributes 
	protected $fillable = ['name', 'content', 'description', 'slug'];

  // Relationships
  public function user()
  {
  	return $this->belongsTo('App\User');
  }

  public function topics()
  {
  	return $this->belongsToMany('App\Tissue');
  }

  // Static Methods

  public static function rules() { 
    return [
      'title'=>'required|max:191',
      'body'=>'required',
    ];
  }

  public static function byName($name)
  {
  	return Lecture::where('name', 'like', '%' . $name . '%');
  }

  public static function search($query=nil)
  {
  	if (isset($query)) 
  		return Lecture::byName($query)->orderBy('created_at', 'desc')->paginate(10);
  	else
  		return Lecture::orderBy('created_at', 'desc')->paginate(10);
  }

  public static function slugCount($title)
  {
  	$slugCount = Lecture::where('title', $title)->get()->count();
  	return $slugCount;
  }

  // Methods
  public function author_name()
  {
  	return $this->user->name;
  }

  public function slugify()
  {
    $slugCount = Lecture::slugCount($this->title);
  	
  	if (!isset($this->id))
	    if ($slugCount > 0)
	      $this->slug = str_replace(' ', '_', $this->title).'_'.($slugCount + 1);
	    else
	    	$this->slug = str_replace(' ', '_', $this->title);
  }
  
  public function store($request)
  {
    //Slug construction  
    $this->title = $request->title;
    $this->slugify();
    $this->body = $request->body;
    $this->user_id = Auth::user()->id;

    $this->save();
  }
}
