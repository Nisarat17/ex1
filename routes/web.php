<?php
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
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user/{name}', function ($name) {
//     return ("ฮายยยย $name");
// });
// Route::get("/บวกเลข-{name1}-{name2}",function($num1,$num2){
//     return $num1 + $num2;
// });
// Route::get("/showdetail/{Atchara}/{age}/{At}",function($Atchara,$age,$At){
//     return "สวัสดี,$Atchara คุณมีอายุ $age ปี และคุณพูดว่า$At";
// });

Route::get('/', 'HomeController@index');
Route::get('/greeting/{name}', 'HomeController@greeting');
Route::get('/user/show/($id)', 'User Controller@inex');
Route::get('/user/show/update($id)', 'Show Controller@inex');
Route::get('/user', 'update Controller@inex');
Route::get("/todo","TodoController@index");
Route::get("/todo/show/{id}","TodoController@show");
Route::get("/todo/delete/{id}","TodoController@delete");
