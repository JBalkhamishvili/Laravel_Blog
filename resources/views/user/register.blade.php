@extends("index")
@section("content")

<blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded register_login">
    <div class="blockquote-custom-icon bg-dark shadow-sm">
        <h1>
            <i class="fa fa-quote-left text-white">
                Register Form
            </i>
        </h1>
    </div>
    <p>Please fill in username and Password for registration</p>
    @if($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <form method="post" action="/register" name="register" id="register">
        @csrf
        <input type="hidden" name="role_id" value="2">
        <div class="form-group" >
            <label for="username">User Name</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username" value="{{ old('username') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 10%;">Register</button>
    </form>
</blockquote>
@endsection
