<?php

namespace App\Http\Controllers\Api;

use App\Tissue;
use App\TissueType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoneController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $bones=Tissue::getBones()->get();
    return $bones->toJson(JSON_UNESCAPED_UNICODE);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug)
  {
    //
    $bone = Tissue::getBones()->where('slug', $slug)->first();
    
    return $bone->toJson(JSON_UNESCAPED_UNICODE);
  }
}
