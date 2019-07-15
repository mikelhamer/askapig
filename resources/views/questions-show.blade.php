@extends('layouts.main')

@section('content')
    <div class="mt-3">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
        <h2 class="text-center">Question</h2>
        <div class="card">
            <div class="card-header d-block d-md-flex justify-content-md-between">
                <div class="card-title">
                    <h2>{{$question->title}}</h2>
                </div>
                <small>{{$question->created_at}}</small>
            </div>
            <div class="card-body">
                <p class="lead">{{$question->body}}</p>
            </div>
        </div>
        <div>
            @if(!$question->answers->isEmpty())
                <hr>
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <div class="card-title"><h2>{{$answersCountText}}</h2></div>
                    </div>
                    <div class="card-body">
                        @foreach ($question->answers->all()  as $answer)
                            <div class="card m-3">
                                <div class="card-header d-block d-md-flex justify-content-md-between">
                                    <div class="card-title">
                                        <img src="{{asset('images/pig.png')}}" width="50" height="50" class="d-inline-block" alt="">
                                    </div>
                                    <small>{{$answer->created_at}}</small>
                                </div>
                                <div class="card-body">
                                    <p class="lead">{{$answer->body}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="mt-4 mb-2">
                <h3>Are you a pig? Answer!</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <br/>
                @endif
                <form method="post" action="{{route('questions.answers.save', ['id' => $question->id])}}">
                    @csrf
                    <div class="form-group">
                    <textarea rows="7" class="form-control" id="body" name="answer"
                              placeholder="Let em' know what a pig thinks!">{{old('answer')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Post Answer</button>
                </form>
            </div>
        </div>
    </div>
@endsection
