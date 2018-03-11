<?php

namespace App\Http\Controllers;

use App\Tissue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class TissueController extends Controller
{
    private $controllerUrl = '/tissues';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();
        $tissues=Tissue::all();
        return View::make('tissues.list')
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
        //dd($request);
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
        return View::make('tissues.show')
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
        //
        $user=Auth::user();
        return View::make('tissues.create')
        ->with('record',$tissue)
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
        $user=Auth::user();
        if ($id) {
            $tissue=Tissue::find($id);
        } else {
            $tissue=new Tissue;
        }

        $this->validate($request, [
            'name'=>'required|max:191',
            'tissue_type'=>'required',
            'content'=>'required',
            'description'=>'required',
        ]);
        $tissue->name=$request->name;
        $tissue->tissue_type_id=$request->tissue_type;
        $tissue->content=$request->content;
        $tissue->description=$request->description;
        $tissue->save();
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
