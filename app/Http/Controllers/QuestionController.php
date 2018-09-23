<?php

namespace App\Http\Controllers;

use Auth;
use App\Question;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;

class QuestionController extends Controller
{
    private $controllerUrl = "/questions";

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
            $questions = Question::paginate(10);
        } elseif ($user->can('create tests')) {
            $groups = $user->groups->pluck('id');
            $questions = Question::whereIn('id', $groups)->paginate(10);
        }

        return view('questions.list')
            ->with('controllerUrl', $this->controllerUrl)
            ->with('questions', $questions);

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
        return $this->update($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question = null)
    {
        //
        if (!isset($question)) {
            $question = new Question;
        }
        return view('questions.create')
            ->with('question', $question)
            ->with('controllerUrl', $this->controllerUrl);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question = null)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
