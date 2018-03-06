<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tissue extends Model
{
    //Fillable attributes
	protected $fillable = ['name', 'content', 'description'];
}
