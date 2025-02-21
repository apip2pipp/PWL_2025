
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// Route::get('/hello', function () {
//     return 'Hello world';
// });


// Route::get('/world', function () {
//     return ('World');
// });

// Route::get('/', function () {
//     return ('Welcome');
// });

// Route::get('/about', function () {
//     return ('234170159 & Muhammad Afif Khosyidzaki');
// });


// Route::get('/user/{name}', function ($name){
//     return 'My name is '.$name;
// });


// Route::get('/posts/{post}/comments/{comment}', function ($postId,$commentId){
//     return 'Pos ke- '.$postId." Komentar ke-:".$commentId;
// });

// Route::get('/posts/{post}/comments/{comment}/articles{id}', function ($postId,$commentId,$Id){
//     return 'Pos ke- '.$postId." Komentar ke-:".$commentId." Artikel ke - ".$Id;
// });

// Route::get('/user/{name?}', function ($name=null){
//     return 'My name is '.$name;
// });

// Route::get('/user/{name?}', function ($name='afif'){
//     return 'Nama saya : '.$name;
// });

// Route::get('/user/profile', function () {
//     //
//     })->name('profile');
    
    
//     Route::get(
//         '/user/profile', [UserProfileController::class, 'show']
//         )->name('profile');
        
//         // Generating URLs...
//         $url = route('profile');
        
//         // Generating Redirects...
//         return redirect()->route('profile');
        

// Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
// // Uses first & second middleware...
// });

// Route::get('/user/profile', function () {
// // Uses first & second middleware...
// });
// });

// Route::domain('{account}.example.com')->group(function () { Route::get('user/{id}', function ($account, $id) {
// //
// });
// });

// Route::middleware('auth')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);
// });


// Route::prefix('admin')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);
// });


// Route::redirect('/here', '/there');
// Route::view('/welcome', 'welcome'); Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route::get('/hello', [WelcomeController:: class, 'hello']);

// Route::get('/', [PageController::class, 'index']); // Menampilkan pesan 'Welcome'
// Route::get('/about', [PageController::class, 'about']); // Menampilkan nama dan NIM
// Route::get('/articles/{id}', [PageController::class, 'articles']); // Menampilkan artikel berdasarkan id

// Route::post('/', [PageController::class, 'index']); // Menampilkan pesan 'Welcome'
// Route::post('/about', [PageController::class, 'about']); // Menampilkan nama dan NIM
// Route::post('/articles/{id}', [PageController::class, 'articles']); // Menampilkan artikel berdasarkan id

// Route::put('/', [PageController::class, 'index']); // Menampilkan pesan 'Welcome'
// Route::put('/about', [PageController::class, 'about']); // Menampilkan nama dan NIM
// Route::put('/articles/{id}', [PageController::class, 'articles']); // Menampilkan artikel berdasarkan id

// Route::delete('/', [PageController::class, 'index']); // Menampilkan pesan 'Welcome'
// Route::delete('/about', [PageController::class, 'about']); // Menampilkan nama dan NIM
// Route::delete('/articles/{id}', [PageController::class, 'articles']); // Menampilkan artikel berdasarkan id


// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

// // Rute untuk halaman utama (Welcome)
// Route::get('/index', HomeController::class,'index');

// // Rute untuk halaman tentang (Name dan NIM)
// Route::get('/about', AboutController::class,'about');

// // Rute untuk halaman artikel dinamis berdasarkan ID
// Route::get('/articles/{id}', ArticleController::class,'article');

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/articles/{id}', [HomeController::class, 'article']);
