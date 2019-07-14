@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <form class="w-75">
            <h2>Ask Question</h2>
            <div class="form-group">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="body" class="font-weight-bold">Body</label>
                <textarea rows="7" class="form-control" id="body" placeholder="Body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
