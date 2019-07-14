@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center justify-content-md-end align-items-center px-3">
        <a href="" class="btn btn-success btn-lg">Ask Question</a>
    </div>
    <div class="mt-2">
    @foreach($questions->all() as $question)
        <a href="" class="nav-link">
            <div class="border border-secondary btn-outline-secondary p-3">
                <div class="h2 text-center mb-0">{{$question->title}}</div>
            </div>
        </a>
    @endforeach
    </div>
@endsection
