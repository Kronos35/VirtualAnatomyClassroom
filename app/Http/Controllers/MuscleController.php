<?php

namespace App\Http\Controllers;

use App\Tissue;
use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MuscleController extends Controller
{
    private $controllerTitle = 'Muscles\'';
    private $controllerUrl = '/muscles';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Muscle type
        $muscleType = TissueType::where('name', 'Muscles')->first();
        
        // Accepted tissueTypes
        $muscleChildren = DB::table('tissue_types AS tt')
            ->where('tt.id', $muscleType->id)
            ->join('tissue_types AS tt2', 'tt.id', '=', 'tt2.tissue_type_id')
            ->get()
            ->pluck('id');

        $acceptedTissueTypes = DB::table('tissue_types AS tt')
            ->where('tt.id', $muscleType->id)
            ->orWhere('tt.tissue_type_id', $muscleType->id)
            ->orWhereIn('tt.tissue_type_id', $muscleChildren)
            ->join('tissue_types AS tt2', 'tt.id', '=', 'tt2.tissue_type_id')
            ->get()
            ->pluck('id');

        
        $muscles =Tissue::whereIn('tissue_type_id', $acceptedTissueTypes)
            ->paginate(10);

        return View::make('tissues.list')
            ->with('controllerTitle',$this->controllerTitle)
            ->with('controllerUrl',$this->controllerUrl)
            ->with('tissues',$muscles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
    public function edit(Request $request, $id)
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
