<?php

namespace App\Http\Controllers;

use App\Tissue;
use App\TissueType;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class MuscleController extends Controller
{
    private $controllerUrl = '/muscles';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::user()) {
            $tissues =Tissue::get();
            $muscles = new Collection;
            foreach ($tissues as $tissue) {
                $tissueType = $tissue->tissue_type;
                while ($tissueType->tissue_type) {
                    $tissueType=$tissueType->tissue_type;
                    if ($tissueType->name == 'Muscles') {
                        $muscles->push($tissue);
                    }
                }
            }

            return View::make('muscles.list')
            ->with('controllerUrl',$this->controllerUrl)
            ->with('muscles',$muscles);
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
