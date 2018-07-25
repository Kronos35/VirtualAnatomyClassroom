<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    private $controllerTitle = 'Zone\'';
    private $controllerUrl = '/zones';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $zones = Zone::all();
        return View::make('zones.list')
            ->with('controllerTitle',$this->controllerTitle)
            ->with('controllerUrl', $this->controllerUrl)
            ->with('zones', $zones);
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
        //
        $this->update($request, null);
        return redirect()->action('ZoneController@index')->with('status', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
        return View::make('zones.show')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('zone',$zone);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Zone $zone=null)
    {
        //
        return View::make('zones.create')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('record', $zone);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone = null)
    {
        //
        if ($zone != null) {
            $slug = $zone->slug;
        } else {
            $zone = new Zone;
            $slug = str_replace(' ', '_', $request->name);
            $slugFlag = Zone::where('slug', $slug)->get();
            if ($slugFlag->count() > 0) {
                $slug = str_replace(' ', '_', $request->name).'_'.($slugFlag->count()+1);
            }
        }

        $zone->name = $request->name;
        $zone->content = $request->content;
        $zone->description = $request->description;
        $zone->slug = $slug;
        $zone->save();

        $this->validate($request, [
            'name'=>'required|max:191',
            'content'=>'required',
            'description'=>'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
        $zone->delete();
        return redirect($this->controllerUrl);
    }
}
