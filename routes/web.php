<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Comment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/adPost', [PostController::class, 'showadPost'])->middleware('auth');

Route::post('/adPost', [PostController::class, 'storePost'])->middleware('auth');

Route::get('/post/{id}', [PostController::class, 'showPost'])->name('post');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::get('/user', [UserController::class, 'showDashboard'])->middleware('auth');

//Route::get('/user', [UserController::class, 'showDashboard'])->middleware('auth');

Route::post('/edit/{id}', [PostController::class, 'editPost']);
Route::post('/comment/{id}', [CommentsController::class, 'storeComment']);

Route::post('/delete/{id}', [PostController::class, 'deletePost']);

/*
 *
 *Router::get('/blog', function () {
    include("init.php");
    $post = $container->create('postController');
    $post->showPosts();
});

Router::get('/post/([0-9]*)', function (Request $req) {
    include("init.php");
    $id = $req->params[0];
    $post = $container->create('postController');
    $post->showPost($id);
});

Router::post('/post/([0-9]*)', function (Request $req) {
    include("init.php");
    $id = $req->params[0];
    $post = $container->create('postController');
    $post->showPost($id);
});

Router::get('/adPost', function () {
    include("init.php");
    $post = $container->create('blogController');
    $post->showAdPost();

});
Router::post('/adPost', function () {
    include("init.php");
    $post = $container->create('blogController');
    $post->savePost();
});
Router::get('/login', function () {
    include("init.php");
    $user = $container->create('loginController');
    $user->loginshow();

});
Router::post('/login', function () {
    include("init.php");
    $user = $container->create('loginController');
    $user->login();

});
Router::get('/register', function () {
    include("init.php");
    $user = $container->create('loginController');
    $user->registerShow();

});
Router::post('/register', function () {
    include("init.php");
    $user = $container->create('loginController');
    $user->register();

});

Router::get('/logout', function () {
    include("init.php");
    $user = $container->create('loginController');
    $user->logout();

});

Router::get('/admin', function () {
    include("init.php");
    $user = $container->create('adminController');
    $user->showAdmin();
});

Router::get('/user', function () {
    include("init.php");
    $user = $container->create('adminController');
    $user->showUser();

});

Router::post('/delete/([0-9]*)', function (Request $req) {
    include("init.php");
    $id = $req->params[0];
    $post = $container->create('postController');
    $post->delete($id);
});

Router::post('/edit/([0-9]*)', function (Request $req) {
    include("init.php");
    $id = $req->params[0];
    $post = $container->create('postController');
    $post->edit($id);
});
 *
 */

