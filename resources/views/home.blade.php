@extends('index')

@section('content')
    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
        <div class="blockquote-custom-icon bg-dark shadow-sm">
            <i class="fa fa-quote-left text-white">
                <h1>Welcome to this awesome Blog</h1>
            </i>
        </div>
        <pre>My Blog</pre>
        <a href='posts' ><img src='images/home_page.gif' class='img-fluid' alt='...'></a>
    </blockquote>
@endsection
