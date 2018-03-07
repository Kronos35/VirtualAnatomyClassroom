<?php

namespace App\Http\Controllers;

use App\Tissue;
use Illuminate\Http\Request;

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
        return $tissues->toJson();
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
     * @param  \App\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function show(Tissue $tissue)
    {
        //
        return $tissue->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function edit(Tissue $tissue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tissue  $tissue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tissue $tissue)
    {
        //
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
    }
}
