<?php

namespace App\Http\Controllers;

use App\Test;
use App\Group;
use Illuminate\Http\Request;
use Auth;

class TestController extends Controller
{
    private $controllerUrl = '/tests';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user=Auth::user();

        if ($user->can('see all groups')) {
            $tests = Test::paginate(10);
        } else {
            $user_groups = DB::table('user_group')
                ->where('user_id', $user->id)
                ->pluck('group_id');
            $groups = Group::whereIn('id', $user_groups)->paginate(10);
        }

        return view('tests.list')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('tests', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->edit(null);
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
        return $this->update($request, null);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
        return view('tests.show')
            ->with('test',$test)
            ->with('controllerUrl', $this->controllerUrl);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test = null)
    {
        //
        $user = Auth::user();
        if ($user->can('see all groups')) {
            $groupList = Group::where('user_id', $user->id)->orWhere('account_id', $user->account_id)->get();
        } else {
            $groupList = $user->classes;
        }

        // Format all tissue types for processing
        $groups=[];
        $groups['']='Select';
        foreach ($groupList->toArray() as $g) {
            $groups[$g['id']]=$g['name'];
        }
        
        return view('tests.create')
            ->with('groups', $groups)
            ->with('controllerUrl', $this->controllerUrl)
            ->with('record', $test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test=null)
    {
        // Check if $test is null or not
        if (!isset($test)) {
            $test = new Test;
        }

        // Validate request 
        $this->validate($request, [
            'name'=>'required|max:191',
            'description'=>'required',
            'instructions'=>'required',
            'due_at'=>'required',
            'group_id' => 'required'
        ]);

        $test->name = $request->name;
        $test->description = $request->description;
        $test->instructions = $request->instructions;
        $test->group_id = $request->group_id;
        $test->due_at = $request->due_at;
        $test->save();

        return redirect($this->controllerUrl.'/'.$test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
