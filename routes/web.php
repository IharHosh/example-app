<?php

use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Page_1Controller;
use App\Http\Controllers\MyNewController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


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
// Route::view('/', 'welcome');
// Route::get('/', function(){
//     return view('welcome');
// });
// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', function(){
    return view('home');
});

// User

// Route::prefix('user')->group(function (){

// Route::get('/posts', [PostController::class, 'index'])->name('user.posts.index'); // имя можно так же указать ->name('posts'); без index так как оно устанвлено по умолчанию
// Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');
// Route::get('/posts/{id_post}', [PostController::class, 'show'])->name('user.posts.show');
// Route::get('/posts/{id_post}/edit', [PostController::class, 'edit'])->name('user.posts.edit');
// Route::put('/posts/{id_post}', [PostController::class, 'update'])->name('user.posts.update');
// Route::delete('/posts/{id_post}', [PostController::class, 'destroy'])->name('user.posts.destroy');
// Route::put('/posts/{id_post}/like', [PostController::class, 'like'])->name('user.posts.like'); // от себя придуманный роут который не предоставляется с применением одной (универсальной) строкой роута

// Route::resource('/posts/{post}/comments', CommentController::class)->except(['index', 'show']); //данный маршрут заменяет выше перечисленный скрипт одной строкой (но не предоставляет наглядности, и не всегда нам, требуются все выше указанные данные)
// // ->only(['index', 'show'] // показывает только те параметры которые мы указали
// // ->except(['index', 'show'] // исключает указанные параметры

// Route::fallback(function () {return "Fallback";});  // показывает если ни одно из действий не найдено (!!! РАСПОЛОЖЕНИЕ НИЖЕ ВСЕХ РОУТОВ !!!)
// });

// User

// Route::get('/home', function () {
//     return view ('home');
// });
// // Route::get('/', [PageController::class, 'show']);

// // Route::get('/', function () {
// //     return '<h1>Hello World!</h1>';
// // });
// Route::get('/greeting', function () {
//     // return view ('welcome');
//     return [
//       'All',
//       'Trucks',
//       'Tools'
//     ];
// });

// // Route::get ('/firstpage', 'MyNewController@index');
// Route::get('/firstpage', [MyNewController::class, 'index']);


