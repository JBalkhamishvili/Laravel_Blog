<div class="modal-content">
    <div class="blockquote-custom-icon bg-dark shadow-sm">
        <h1>
            <i style="font-size: 30px;" class="fa fa-quote-left text-white">
                Add a Comment
            </i>
        </h1>
    </div>
    <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
        <form method="post" action="/comment/{{$post->id}}" name="adPost" id="adPost">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
            <div class="form-group" style="text-align: left">
                <textarea class="form-control" name="content" id="content" rows="3" placeholder="New Comment" required ></textarea>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </form>
    </blockquote>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
