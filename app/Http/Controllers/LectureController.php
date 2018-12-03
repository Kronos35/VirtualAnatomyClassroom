<?php

namespace App\Http\Controllers;

use App\Lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LectureController extends Controller
{
  private $controllerTitle = 'Lectures\'';
  private $controllerUrl = '/lectures';
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
    
    $lectures= Lecture::search(request()->search);

    return View::make('lectures.list')
      ->with('controllerTitle', $this->controllerTitle)
      ->with('controllerUrl',$this->controllerUrl)
      ->with('lectures',$lectures);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
    return View::make('lectures.create')
      ->with('controllerTitle', $this->controllerTitle)
      ->with('controllerUrl',$this->controllerUrl);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
    $this->validate($request, Lecture::rules());
    $lecture =  new Lecture;
    $lecture->store($request);

    return redirect()->action('LectureController@index')->with('status', 'Success!');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Lecture  $lecture
   * @return \Illuminate\Http\Response
   */
  public function show(Lecture $lecture)
  {
    //
    return View::make('lectures.show')
      ->with('controllerTitle', $this->controllerTitle)
      ->with('controllerUrl',$this->controllerUrl)
      ->with('lecture', $lecture);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Lecture  $lecture
   * @return \Illuminate\Http\Response
   */
  public function edit(Lecture $lecture)
  {
    //
    return View::make('lectures.create')
      ->with('controllerTitle', $this->controllerTitle)
      ->with('controllerUrl',$this->controllerUrl)
      ->with('record',$lecture);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Lecture  $lecture
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Lecture $lecture)
  {
    //
    $this->validate($request, Lecture::rules());
    $lecture->store($request);

    return redirect()->action('LectureController@index')->with('status', 'Success!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Lecture  $lecture
   * @return \Illuminate\Http\Response
   */
  public function destroy(Lecture $lecture)
  {
    //
    $lecture->delete();

    return redirect()->action('LectureController@index')->with('status', 'Success!');
  }
}
