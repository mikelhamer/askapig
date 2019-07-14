<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Support\Str;
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
        $questions = Question::all()->sortByDesc('created_at');
        return view('index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $placeholders = ['Why do pigs like to roll around in the mud?', 'Do you speak Pig Latin?'];
        $randomPlaceholder = $placeholders[array_rand($placeholders)];
        return view('questions-create', compact('randomPlaceholder'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'min:5', 'endsWith:?'],
            'body' => ['required', 'min:5'],
        ]);
        $question = new Question([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
        ]);
        $question->save();
        return redirect()->route('questions.index')->with('success', 'Thanks for asking!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        $answersCountText = count($question->answers) . ' ' . Str::plural('Answer', count($question->answers));
        return view('questions-show', compact(['question', 'answersCountText']));
    }

    /**
     * Store a newly created answer in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function saveAnswer(Request $request, $id) {
        $question = Question::findOrFail($id);
        $this->validate($request, [
            'answer' => ['required', 'min:5'],
        ]);
        $answer = new Answer([
            'body' => $request->get('answer'),
        ]);
        $question->answers()->save($answer);
        return redirect()->route('questions.show', ['id' => $question->id])->with('success', 'Thanks for answering!');
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
