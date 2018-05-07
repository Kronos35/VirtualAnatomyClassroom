<?php

namespace App\Http\Controllers;

use App\Tissue;
use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BoneController extends Controller
{
    private $controllerUrl = '/bones';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Lists
        if (Auth::user()) {
            $tissue_type_id = TissueType::where('name','Bones')->pluck('id');
            if ($tissue_type_id->count() > 0) {
                $bones=Tissue::where('tissue_type_id',$tissue_type_id)->get();
                return View::make('bones.list')
                    ->with('controllerUrl',$this->controllerUrl)
                    ->with('bones',$bones);
            } else {
                return View::make('bones.list')
                    ->with('controllerUrl',$this->controllerUrl);
            }
        }
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return redirect('/tissues/create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return redirect('/tissues/'.$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return redirect('/tissues/'.$id.'/edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
