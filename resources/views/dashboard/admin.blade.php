@extends('index')

@section('content')
<blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
    <div class="blockquote-custom-icon bg-dark shadow-sm">
        <h1>
            <i class="fa fa-quote-left text-white">
                Welcome {{auth()->user()->username}} to Your Admin Panel
            </i>
        </h1>
    </div>
    <h4>My Blog Posts</h4>
    <ul class="list-group list-group-flush">
        @if($error == true)
            <p>Sorry we couldnt find any Posts!</p>
        @endif


        @foreach ($posts AS $arr)
            <li class="list-group-item">
                <a href="post/{{$arr->id}}">
                    {{$arr->title}}
                </a>
                <br/>
                {{$arr->short_content}}

            </li>
        @endforeach
        <div class="text-xs-center">
            {{ $posts->links("pagination::bootstrap-4") }}
        </div>
    </ul>
</blockquote>
@endsection
