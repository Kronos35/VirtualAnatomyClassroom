<?php

namespace App\Http\Controllers;

use App\Tissue;
use App\TissueType;
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
        $user=Auth::user();
        if($user){
            $tissues=Tissue::all();
            return View::make('tissues.list')
            ->with('controllerTitle', $this->controllerTitle)
            ->with('controllerUrl',$this->controllerUrl)
            ->with('tissues',$tissues);
        }
        return redirect('/login');
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
        //
        $user=Auth::user();
        if ($user) {
            $tissue_types=TissueType::get(['id','name']);
            $tissueTypes=[];
            $tissueTypes['']='Select';
            foreach ($tissue_types->toArray() as $tt) {
                $tissueTypes[$tt['id']]=$tt['name'];
            }
            return View::make('tissues.create')
                ->with('tissueTypes',$tissueTypes)
                ->with('record',$tissue)
                ->with('controllerUrl',$this->controllerUrl);
            $user=Auth::user();
        }
        return redirect('/login');
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
            $slug = $tissue->slug;
        } else {
            $tissue=new Tissue;
            //Slug construction            
            $slugFlag = Tissue::where('slug', $slug)->get();
            if ($slugFlag->count() > 0) {
                $slug = str_replace(' ', '_', $request->name).'_'.($slugFlag->count()+1);
            } else {
                $slug = str_replace(' ', '_', $request->name);
            }
        }

        $this->validate($request, [
            'name'=>'required|max:191',
            'tissue_type_id'=>'required',
            'content'=>'required',
            'description'=>'required',
        ]);

        $tissue->name = $request->name;
        $tissue->tissue_type_id = $request->tissue_type_id;
        $tissue->content = $request->content;
        $tissue->description = $request->description;
        $tissue->slug = $slug;
        $tissue->save();

        //redirect
        return redirect()->action('TissueController@index')->with('status', 'Success!');
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
        $user = Auth::user();
        if ($user) {
            $tissue->delete();   
        }
        return redirect($this->controllerUrl);
    }
}
