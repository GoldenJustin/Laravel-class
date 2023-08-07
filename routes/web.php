<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;


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
// routes that sends back a view
// Route::get('/', function () {
//     return view('welcome');
// });


// returning routes rather than view in blade.php
// Route::get('/products', [ProductsController::class, 'index']);

// New way of defining routes using string 
// Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Named routes
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);


//pattern is an integer
// Route::get('/products/{id}', [ProductsController::class, 'show'])-> where ('id', '[0-9]+');

//pattern is an string
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])-> where (['name'=>'[a-zA-Z]+', 'id'=>'[0-9]+']);


// route to users - string
// Route::get('/users', function(){
//     return 'welcome to users page';
// });

// route to users - array(iNTO JSON ALWAYS)
// Route::get('/users', function(){
//     return['IT', 'IS', 'TRIAL'];
// });

// route to users - JSON(iNTO JSON ALWAYS)
// Route::get('/users', function(){
//     return response()->json([
//         'name'=>'JUSTIN',
//         'student'=>'still learning',
//         'content'=>'Laravel class'
//     ]);
// });



// route to users - function
// Route::get('/users',function(){
//     return redirect('/');
// });

// creating first other page
// Route::get('/users', function(){
//     return view('home');
// });

//endpoints sample
// homepage endpoint ==/
// project/users == /users


// posts request
Route::get('/posts', [PostsController::class, 'index']);
