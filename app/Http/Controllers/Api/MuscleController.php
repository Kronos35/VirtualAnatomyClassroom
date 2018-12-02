<?php

namespace App\Http\Controllers\Api;

use App\Tissue;
use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;

class MuscleController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $muscles =Tissue::getMuscles()->get();

    return $muscles->toJson(JSON_UNESCAPED_UNICODE);
  }

  /**
   * Return the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
    //
    $muscle =Tissue::getMuscles()->where('slug', $slug)->first();

    return $muscle->toJson(JSON_UNESCAPED_UNICODE);
  }
}
