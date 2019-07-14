@extends('layouts.main')

@section('content')
    <div class="mt-3">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>{{$question->title}}</h2>
                </div>
            </div>
            <div class="card-body">
                <p class="lead">{{$question->body}}</p>
            </div>
        </div>
    </div>
@endsection
