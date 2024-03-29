<?php

namespace App\Http\Controllers;

use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

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
        $tissueTypes=TissueType::paginate(10);

        if (isset(request()->search)) {
            $search = "%".request()->search."%";
            $tissueTypes = TissueType::where('name', 'like', $search)->paginate('10');
        } else {
            $tissueTypes = TissueType::paginate('10');
        }

        return View::make('tissue_types.list')
            ->with('controllerUrl',$this->controllerUrl)
            ->with('tissueTypes',$tissueTypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return $this->edit($request, null);
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
    public function edit(Request $request, TissueType $tissueType=null)
    {
        //
    
        $tissue_types=TissueType::get(['id','name']);
    
        $tissueTypes=[];
        $tissueTypes['']='Select';
        foreach ($tissue_types->toArray() as $tt) {
            $tissueTypes[$tt['id']]=$tt['name'];
        }
        return View::make('tissue_types.create')
            ->with('record',$tissueType)
            ->with('tissueTypes',$tissueTypes)
            ->with('controllerUrl',$this->controllerUrl);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TissueType  $tissueType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id=null)
    {
        //
        if ($id) {
            $tissue_type=TissueType::find($id);
        } else {
            $tissue_type=new TissueType;
        }

        $this->validate($request, [
            'name'=>'required|max:191',
            'description'=>'required',
        ]);
        $tissue_type->name=$request->name;
        $tissue_type->tissue_type_id=$request->tissue_type_id;
        $tissue_type->description=$request->description;
        $tissue_type->save();
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
        $tissueType->delete();
        return redirect($this->controllerUrl);
    }
}
