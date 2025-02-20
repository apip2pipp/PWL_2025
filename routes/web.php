
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

use Illuminate\Support\Facades\Route;

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