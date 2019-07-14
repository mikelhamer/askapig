@extends('layouts.main')

@section('content')
    <h2>Questions</h2>
    <ul>
        @foreach($questions->all() as $question)
            <li>{{$question->title}}: <strong>{{$question->answers[0]->body}}</strong></li>
        @endforeach
    </ul>
@endsection
