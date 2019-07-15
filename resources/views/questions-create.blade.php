@extends('layouts.main')

@section('content')
    <div class="mt-3">
        <h2>Ask Question</h2>
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
        <form class="w-75" method="POST" action="{{route('questions.store')}}">
            @csrf
            <div class="form-group">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="{{$randomPlaceholder}}" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="body" class="font-weight-bold">Body</label>
                <textarea rows="7" class="form-control" id="body" name="body" placeholder="Elaborate a little">{{old('body')}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
