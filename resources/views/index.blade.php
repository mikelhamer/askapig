@extends('layouts.main')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    <div class="d-flex justify-content-center justify-content-md-end align-items-center px-3">
        <a href="{{route('questions.create')}}" class="btn btn-success btn-lg">Ask Question</a>
    </div>
    @if($questions  ->isEmpty())
        <h2 class="text-center mt-2">There aren't any questions yet, ask one!</h2>
    @else
        <h2 class="text-center">Questions</h2>
        <div class="px-3 mt-2 border-left border-right border-secondary h-100">
            @foreach($questions->all() as $question)
                <a href="{{route('questions.random', ['id' => $question->id])}}" class="nav-link">
                    <div class="border border-dark btn-outline-secondary p-3">
                        <div class="h2 text-center mb-0">{{$question->title}}</div>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
@endsection
