<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

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
//this default route on laravel
// Route::get('/', function () {
//     //return view('welcome');
// });

//this is create new route
// Route::get('/Hello',function(){
//     return '<h1>Hello </h1>';
// });

// Route::match(['get','pos'],'/match',function(){
//     return 'this is match for multi routes and parameter ';
// });

// Route::match({'/student/{$id}',function($id){
//     return 'this is '.$id;
// }})->where('id','9',)

//this is path for route

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('students', [StudentController::class, 'index']);
Route::get('add-student', [StudentController::class, 'create']);
Route::post('add-student', [StudentController::class, 'store']);


//insert news
