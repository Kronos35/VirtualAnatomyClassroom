<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    private $controllerTitle = 'Group\'';
    private $controllerUrl = '/groups';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Groups List
        $groups = Group::where('user_id',(Auth::user())->id)->get();

        return View::make('groups.list')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('controllerTitle',$this->controllerTitle)
            ->with('groups',$groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        // $this->edit($request, null);
        return View::make('groups.create')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('record', null);
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
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
        return View::make('groups.show')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('group',$group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Group $group = null)
    {
        //
        return View::make('groups.create')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('record', $group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group = null)
    {
        //
        $user = Auth::user();
        if ($user->can('create groups')) {
            if (!isset($group))
                $group = new Group;
            $this->validate($request, [
                'name' => 'required|max:191',
                'description' => 'required'
            ]);

            $group->name = $request->name;
            $group->user_id = $user->id;
            $group->description = $request->description;
            $group->save();
        }
        return redirect()->action('GroupController@index')->with('status', 'Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
        if((Auth::user())->id == $group->user_id){
            $group->delete();
            return redirect()->action('GroupController@index')->with('status', 'Successfully deleted group');
        }
    }
}
