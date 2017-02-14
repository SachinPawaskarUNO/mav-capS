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
Route::get('investing', function () {
    return view('home.investing');
});
Route::get('businessloans', function () {
    return view('home.businessLoans');
});
Route::get('howitworks', function () {
    return view('home.howItWorks');
});
Route::get('aboutus', function () {
    return view('home.aboutUs');
});
//Route::get('/register', function () {
//    return view('/auth/inv_register');
//});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Route::get('register', function () {
//    return view('/auth/register');
//});

//Route::get('/inv_register', function () {
//    return view('/auth/inv_register');
//});

Route::get('bor_register', function () {
    return view('/auth/bor_register');
});
Route::get('inv_register', function () {
    return view('/auth/inv_register');
});