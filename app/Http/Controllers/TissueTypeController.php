<?php

namespace App\Http\Controllers;

use App\TissueType;
use Illuminate\Http\Request;

class TissueTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tissueTypes=TissueType::all();
        return $tissueTypes->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return $tissueType->toJson();
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
