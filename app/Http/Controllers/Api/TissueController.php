<?php

namespace App\Http\Controllers\Api;

use App\Tissue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TissueController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $tissues=Tissue::all();
      return $tissues->toJson(JSON_UNESCAPED_UNICODE);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Tissue $tissue)
  {
      //
      return $tissue->toJson(JSON_UNESCAPED_UNICODE);
  }

  /**
   * Get resource from storage based on name.
   *
   * @param  string $name 
   * @return \Illuminate\Http\Response
   */
  public function findByName($name)
  {
      $tissue = Tissue::byName($name)->first();
      return $tissue->toJson(JSON_UNESCAPED_UNICODE);
  }
}
