@extends('index')

@section('content')
    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
        <div class="blockquote-custom-icon bg-dark shadow-sm">
            <h1><i class="fa fa-quote-left text-white"> Add a New awesome Blog post</i></h1>
        </div>
        <form method="POST" action="/adPost" name="adPost" id="adPost">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="form-group">
                <label for="title">Blog title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Blog title" required >
            </div>
            <br>
            <div class="form-group">
                <label for="short_content">Blog Short Content</label>
                <textarea class="form-control" name="short_content" id="short_content" placeholder="Short Content" required ></textarea>
            </div>
            <br/>
            <div class="form-group">
                <label for="content">Blog Content</label>
                <textarea class="form-control" name="content" id="content" rows="4" placeholder="Blog Content" required ></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">add Post</button>
        </form>
    </blockquote>
@endsection
