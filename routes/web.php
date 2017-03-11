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


Auth::routes();

Route::get('home', 'HomeController@index');
Route::resource('newsletter','NewsletterController');
Route::get('inv_register','UserController@investorRegistration');
Route::get('bor_register','UserController@businessOwnerRegistration');
Route::get('bo_review','ManagerController@reviewboa');
Route::get('ia_review','ManagerController@reviewia');

Route::group([ 'middleware' => ['role:admin']], function() {
    Route::resource('managers','ManagerController');
});
Route::group([ 'middleware' => 'auth'], function() {
    Route::resource('bo_application','BusinessOwnerApplicationController');
    Route::resource('inv_application','InvestorApplicationController');
    Route::resource('loan_application','LoanController');
    Route::resource('add_funds','FundController');
});
Route::get('/{any}', function ($any) {
    return redirect('/');
})->where('any', '.*');
