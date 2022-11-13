<?php
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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;


Route::get('/', function () {
    return view('welcome');
});

//this is the more preferred method in laravel 8
//get(/endpoint, [controller, function we want to use]) Laravel 8
Route::get('/products',[ProductsController::class, 'index']); 
Route::get('/products/about',[ProductsController::class, 'about']);
//passing params to controllers using {}
Route::get('/products/{name}',[ProductsController::class, 'show']); 

//Param Pattern is integer. Type integer only otherwise it will return 404
Route::get('/products/{id}',
    [ProductsController::class, 'show'])
    ->where('id', '[0-9]+'); //int constraints, where('id', regex), + another digit ex. 10

//Param Pattern is string. 
Route::get('/products/{name}',
    [ProductsController::class, 'show'])
    ->where('id', '[a-zA-Z]+');

//Multiple params with constraints 
Route::get('/products/{name}/{id}',
    [ProductsController::class, 'show'])
    ->where([
        'name' => '[a-zA-Z]+',
        'id' => '[0-9]+'
    ]);    

//Laravel 8(also new)
Route::get('/products', 'App\Http\Controllers\ProductsController@index');

//Before laravel 8
Route::get('/products','ProductsController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function (){
    return "welcome to the users page";
});

//laravel will automatically convert array to json
Route::get('/users', function (){
    return ["php","laravel"];
});

Route::get('/users', function (){ //return json string
    return response()->json([
        'name' => 'kris'
    ]);
});

Route::get('/users', function(){//redirect to homepage
    return redirect('/');
});