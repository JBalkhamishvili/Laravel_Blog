<blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded ">
    <div class="blockquote-custom-icon bg-dark shadow-sm">
        <h3>
            <i class="fa fa-quote-left text-white">
                Comments
            </i>
        </h3>
    </div>
    @auth()
        <section>
            <article class="flex">
                @if(count($post->comment) == 0)
                    <p>no comments yet!</p>
                @endif

                @foreach($post->comment AS $commi)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="https://i.pravatar.cc/100?u={{$commi->id}}" alt="" width="100%" height="auto">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text">{{$commi->content}}</p>
                                        <p style="color: darkgrey; font-size: 13px;text-align: right;">by {{$commi->user->username}}, {{date_format($commi->created_at, "Y-m")}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </article>
        </section>

        <div class="card-footer">

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#comment_modal" >Add Comment</button>
            @else
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <p>Login or Register to make comments!</p>
                </blockquote>

            @endauth
        </div>
</blockquote>

