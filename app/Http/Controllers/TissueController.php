<?php

namespace App\Http\Controllers;

use App\Tissue;
use App\TissueType;
use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class TissueController extends Controller
{
  private $controllerTitle = 'Tissues\'';
  private $controllerUrl = '/tissues';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    $tissues = Tissue::search(request()->search);


    return View::make('tissues.list')
      ->with('controllerTitle', $this->controllerTitle)
      ->with('controllerUrl',$this->controllerUrl)
      ->with('tissues',$tissues);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    //
    return $this->edit($request,null);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $this->update($request, null);
    return redirect()->action('TissueController@index')->with('status', 'Success!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Tissue  $tissue
   * @return \Illuminate\Http\Response
   */
  public function show(Tissue $tissue)
  {
    //
    return View::make('tissues.show')
      ->with('controllerUrl',$this->controllerUrl)
      ->with('tissue',$tissue);
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Tissue  $tissue
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request, Tissue $tissue=null)
  {
    // Retrieve all tissue types
    $tissue_types=TissueType::get(['id','name']);

    // Format all tissue types for processing
    $tissueTypes=[];
    $tissueTypes['']='Select';
    foreach ($tissue_types->toArray() as $tt) {
      $tissueTypes[$tt['id']]=$tt['name'];
    }

    // Retrieve all zones
    $zone_list=Zone::get(['id','name']);
    // Format all zones for processing
    $zones=[];
    $zones['']='Select';
    foreach ($zone_list->toArray() as $z) {
      $zones[$z['id']]=$z['name'];
    }
    return View::make('tissues.create')
      ->with('tissueTypes',$tissueTypes)
      ->with('record',$tissue)
      ->with('zones',$zones)
      ->with('controllerUrl',$this->controllerUrl);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Tissue  $tissue
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id=null)
  {
    //
    $this->validate($request, Tissue::rules());

    if ($id) {
      $tissue = Tissue::find($id);
    } else {
      $tissue = new Tissue;
    }

    $tissue->store($request);

    //redirect
    if ($id) {
      return redirect()->action('TissueController@index')->with('status', 'Success!');
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Tissue  $tissue
   * @return \Illuminate\Http\Response
   */
  public function destroy(Tissue $tissue)
  {
    //
    $tissue->delete();

    return redirect()->action('TissueController@index')->with('status', 'Success!');
  }
}
