<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Auth;

class GroupController extends Controller
{
    private $controllerTitle = 'Groups';
    private $controllerUrl = '/groups';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Groups List
        $user=Auth::user();

        if ($user->can('see all groups')) {
            $groups = Group::where('account_id',$user->account_id)->orWhere('user_id',$user->id)->paginate(10);
        } elseif ($user->can('create groups')) {
            $groups = Group::where('user_id',$user->id)->paginate(10);
        } else {
            $user_groups = DB::table('user_group')
                ->where('user_id', $user->id)
                ->pluck('group_id');
            $groups = Group::whereIn('id', $user_groups)->paginate(10);
        }

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
        return redirect()->action('GroupController@index')->with('status', 'Success!');
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
        if (!isset($group)){
            $group = new Group;
            $userFlag = $user->can('create groups');
        } else {
            $userFlag = $user->can('create groups' && $user->id == $group->user_id);
        }

        // dd($userFlag);
        $this->validate($request, [
            'name' => 'required|max:191',
            'description' => 'required'
        ]);
        if ($userFlag || $user->can('see all groups') ) {
            $group->name = $request->name;
            $group->user_id = $user->id;
            $group->description = $request->description;
            $group->account_id = $user->account_id;
            $group->save();
            return redirect()->action('GroupController@index')->with('status', 'Success!');
        }
        return redirect()->action('GroupController@index')->with('error', 'Looks like you don\'t have permission to do this!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function addTest(Group $group, Request $request)
    {
        // Add Test to group
        DB::table('group_test')->insert([
            'group_id' => $group->id,
            'test_id' => $request->test_id
        ]);
        return redirect()->back();
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
        $user = Auth::user();
        if($user->id == $group->user_id || $user->can('delete all groups')){
            $group->delete();
            return redirect()->action('GroupController@index')->with('status', 'Successfully deleted group');
        }
    }
}
