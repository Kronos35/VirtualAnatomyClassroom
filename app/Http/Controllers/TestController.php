<?php

namespace App\Http\Controllers;

use Auth;
use Image;
use App\Test;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $search = (request()->has('search')) ? "%".request()->search."%" : null;
        if ($user->can('see all groups')) {
            $tests = ($search) ? Test::where('title', 'like', $search)->paginate(10) : Test::paginate(10);
        } elseif ($user->can('create tests')) {
            $groups = $user->groups->pluck('id');
            $tests = ($search) ? Test::whereIn('id', $groups)->where('title', 'like', $search)->paginate(10) : Test::whereIn('id', $groups)->paginate(10);
        } else {
            $groups = $user->classes->pluck('id');
            $tests = ($search) ? Test::whereIn('id', $groups)->where('title', 'like', $search)->paginate(10) : Test::whereIn('id', $groups)->paginate(10);
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
        $groupList = $user->classes;
        
        return view('tests.create')
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
        $this->validate($request, Test::VALIDATION_RULES);

        $test->title = $request->title;
        $test->description = $request->description;
        $test->instructions = $request->instructions;
        $test->user_id = Auth::user()->id;
        $test->due_at = $request->due_at;
        $test->save();

        if (isset($request->group_id)) {
            DB::table('group_test')->insert([
                'test_id' => $test->id,
                'group_id' => $request->group_id
            ]);
        }

        return redirect($this->controllerUrl.'/'.$test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function answer(Request $request)
    {
        dd($request);
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
        $user = Auth::user();
        if ($user->can('create tests') && $test->user = $user) {
            $test->delete();
        }
        return redirect($this->controllerUrl);
    }
}
