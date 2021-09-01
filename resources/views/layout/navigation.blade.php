<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav me-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="/adPost">AdPost</a>
                </li>
            @endauth
        </ul>
    </div>
    <div class="mx-auto order-0 w-50">
        <nav class="nav-item">
            <form method="get" action="/posts" name="searchbox" id="searchbox" class="navbar navbar-dark bg-dark">
                <input style="text-align: center; margin-right: 2%;" class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </nav>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ms-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="/login">Login</a>
                </li>
            @endguest
            @auth()
                <li class="nav-item">
                    <a class="nav-link" href="/user">My Account</a>
                </li>

                <form method="post" action="/logout" name="logout" id="logout">
                    @csrf

                    <a class="nav-link" type="submit" onclick="event.target.parentNode.submit();" href="#">Logout</a>
                </form>
            @endauth
        </ul>
    </div>
</nav>


@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        <h3>{{session('success')}}</strong></h3>
    </div>
@endif
@if (session()->has('logout'))
    <div class="alert alert-primary" role="alert">
        <h3>{{session('logout')}}</strong></h3>
    </div>
@endif
<hr>

<div class="container">
