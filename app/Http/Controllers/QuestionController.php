<?php

namespace App\Http\Controllers;

use App\Question;
use App\Option;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Adding questions
        foreach ($request->questions as $reqQ) {
            // dd($reqQ);
            $question = new Question;
            $question->body = $reqQ['body'];
            $question->test_id = $reqQ['test_id'];
            $question->save();

            // Adding options to each question
            foreach ($reqQ['options'] as $opt) {
                $option = new Option;
                $option->body = $opt['body'];
                $option->is_answer = $opt['is_answer'];
                $option->question_id = $question->id;
                $option->save();
            }
        }

        
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
    public function edit(Question $question)
    {
        //
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
        //
        if (!isset($question)) {
            $question = new Question;
        }

        dd($request->questions);
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
