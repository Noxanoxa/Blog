<?php

// namespace UserController;

// use App\Http\Controllers\AdminController;
// // use App\Http\Controllers\Res;
// // use App\Http\Controllers\Front\UsersController;
// // use App\Http\Controllers\ResController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     $data = [];
//     $data = ['name' => 'samer', 'age' => 20, 'id' => '545556' ];
//     return view('welcome', $data);
//     // return view('welcome')->with('data', 2);
// });

// // Route::get('users', 'Controller@showAdminName');

// // Route::namespace('Front')->group(function(){
// //     //all route only access controller or methods in folder Front
// //     Route::get('users', 'UserController@showAdminName');
// // });

// // Route::prefix('Front')->group(function(){
// //     //all route only access controller or methods in folder Front
// //     Route::get('/users', 'UserController@ShowUserName');
// // });


// // Route::group(['prefix => users'], function() {

// //     Route::get('/', function () {
// //         return 'welcom';
// //     });
// //     Route::post('delete', function () {
// //         return 'delete';
// //     });
// //     Route::delete('show', function () {
// //         return 'show';
// //     });
// //     Route::get('update', function () {
// //         return 'update';
// //     });
// //     Route::get('edit', function () {
// //         return 'edit';
// //     });

// // });

// // Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Route::group(['namespace => Front'], function() {
// //     Route::get('/string', [AdminController::class,'Showstring']);
// // });
// // Route::get('/string', [AdminController::class,'Showstring']);
// // Route::get('/name', [UsersController::class,'ShowUserName']);


// // Route::get('name', [UsersController::class,'ShowUserName']);
// // Route::get('id', [UsersController::class,'ShowUserId']);
// // Route::get('age', [UsersController::class,'ShowUserAge']);

// // 3 options to write middleware : [ middleware for authorisations and accesses to some routes if conditions were approved]

// // Route::group(['middleware' => 'auth'], function(){
// //     Route::get('/name', [UsersController::class,'ShowUserName']);
// // });

// // Route::get('/name', [UsersController::class,'ShowUserName'])->middleware('auth');

// // Route::middleware('auth')->group(function(){
// //     Route::get('/name', [UsersController::class,'ShowUserName']);

// // });

// // example of route of login

// // Route::get('login', function (){
// //     return 'You Have To Be Admin To Access This Page ';
// // })->name('login');

// // Controller - Resources : easy to you istead write all these routes
// /*

// route::get('res', [Res::class, 'index'] );
// route::post('res', [Res::class, 'store'] );

// route::get('res/create', [Res::class, 'create']);

// route::get('res', [Res::class, 'show'] );
// route::get('edit/{id}', [Res::class, 'edit'] );
// route::get('update/{id}', [Res::class, 'update'] );
// route::get('delete/{id}', [Res::class, 'delete'] );
// route::get('res', [Res::class, 'destroy'] );

// // */
// // Route::resource('rescon', ResController::class);


// Route::get('view', [AdminController::class, 'getView']);
// Route::get('landing', [AdminController::class, 'getLanding']);
// Route::get('about', function () {
//     return view('aboutus');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')-> middleware('verified') ;
Route::get('/', function() {
    return'logout';
});
