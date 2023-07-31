<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::get('/products', [ProductsController::class, 'index']);


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
Route::get('/users', function(){
    return view('home');
});

//endpoints sample
// homepage endpoint ==/
// project/users == /users
