<?php

namespace App\Http\Controllers;

use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class TissueTypeController extends Controller
{
    private $controllerUrl = '/tissue_types';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();
        $tissueTypes=TissueType::all();
        return View::make('tissue_types.list')
        ->with('controllerUrl',$this->controllerUrl)
        ->with('tissueTypes',$tissueTypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
        $this->update($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TissueType  $tissueType
     * @return \Illuminate\Http\Response
     */
    public function show(TissueType $tissueType)
    {
        //
        return View::make('tissue_types.show')
            ->with('tissueType',$tissueType)
            ->with('controllerUrl',$this->controllerUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TissueType  $tissueType
     * @return \Illuminate\Http\Response
     */
    public function edit(TissueType $tissueType)
    {
        //
        $user=Auth::user();
        return View::make('tissue_types.create')
        ->with('record',$tissueType)
        ->with('controllerUrl',$this->controllerUrl);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TissueType  $tissueType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TissueType $tissueType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TissueType  $tissueType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TissueType $tissueType)
    {
        //
    }
}
