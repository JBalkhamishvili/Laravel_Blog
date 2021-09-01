@extends('index')

@section('content')
    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
        <a href="/posts" style="margin-left: -90%"><- go back</a>

        <div class="blockquote-custom-icon bg-dark shadow-sm">
            <h1>
                <i class="fa fa-quote-left text-white">
                    {{$post->title}}
                </i>
            </h1>
        </div>
        <div class="card-body">
            <p> {{$post->content}}</p>

        </div>
        <div class="card-footer">
            @auth
            @if($post->user_id === auth()->user()->id || auth()->user()->role_id == 1)
        <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_modal" >Edit Post</button>
                <br/>
            @endif
                @endauth
            <span style="color: darkgrey;">by {{ $post->user->username }}, {{date_format($post->created_at, "Y-m")}}</span>

        </div>
    </blockquote>
    <br/>
    <hr>
    <br/>
    <!-- Comments content-->
    @include("posts.comments")
    @auth

        <!-- Modal -->
    <div id="comment_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            @include("posts.comments_modal")

        </div>
    </div>
    @endauth
    <!-- Modal -->
    <div id="edit_modal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            @include("posts.edit")

        </div>
    </div>
@endsection
