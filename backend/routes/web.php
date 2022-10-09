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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/auth/login/office', function () {
   echo "Teste1";
});
Route::get('/auth/costumes/office', function () {
   echo "Teste2";
});
Route::get('/auth/costumes/office/user', function () {
   echo "Teste3";
});
Route::get('/auth/login/user', function () {
   echo "Teste4";
});
Route::get('/auth/costumes/user', function () {
   echo "Teste5";
});
Route::get('/user/office/home', function () {
   echo "Teste6";
});
Route::get('/user/client/home', function () {
   echo "Teste7";
});
Route::get('/user/office/payments', function () {
   echo "Teste8";
});
Route::get('/user/client/payments', function () {
   echo "Teste9";
});
