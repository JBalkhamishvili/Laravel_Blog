<div class="modal-content">
    <div class="blockquote-custom-icon bg-dark shadow-sm">
        <h1>
            <i style="font-size: 30px;" class="fa fa-quote-left text-white">
                Edit this Post
            </i>
        </h1>
    </div>
    <div>
        <form method="POST" action="/edit/{{$post->id}}" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="title">
                    Title:
                </label>
                <input type="text" name="edit_title" id="title" value=" {{$post->title}}" class="form-control" />
            </div>
            <div class="form-group">
                <label class="col-form-label" for="title">
                    Title:
                </label>
                <input type="text" name="edit_short_content" id="title" value=" {{$post->short_content}}" class="form-control" />
            </div>
            <div class="form-group">
                <label class="col-form-label" for="content">
                    Content:
                </label>
                <textarea name="edit_content" class="form-control" id="content" rows="10"> {{$post->content}}</textarea>
            </div>
            <input type="submit" value="Save Post!" class="btn btn-primary mt-2 mb-2" />
        </form>
    </div>
    <div class="modal-footer">

        <form method="POST" action="/delete/{{$post->id}}" class="form-horizontal">
            @csrf
            <input type="submit" value="Delete Post!" class="btn btn-danger" />
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>

    </div>
</div>
