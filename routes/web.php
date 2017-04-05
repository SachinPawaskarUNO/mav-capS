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

Route::group([ 'middleware' => ['role:admin']], function() {
    Route::resource('managers','ManagerController');
});
Route::group([ 'middleware' => 'auth'], function() {
    Route::resource('bo_application','BusinessOwnerApplicationController');
    Route::resource('inv_application','InvestorApplicationController');
    Route::resource('loan_application','LoanController');
    Route::resource('loandetail','LoanController');
    Route::resource('add_funds','FundController');
    Route::get('review_bo_app','ManagerController@reviewboa');
    Route::get('review_inv_app','ManagerController@reviewia');
    Route::get('lrc','ManagerController@lrc');
    Route::get('bo_myloans','LoanController@myloans');
    Route::post('bo_app_reject', 'BusinessOwnerApplicationController@reject');
    Route::post('bo_loan_approve', 'LoanController@approveboloan');
    Route::post('bo_loan_accept', 'LoanController@acceptboloan');
    Route::post('bo_loan_approve_manager', 'LoanController@approveboloanmanager');
    Route::post('bo_loan_reject', 'LoanController@rejectboloan');
    Route::post('bo_loan_reject_manager', 'LoanController@rejectboloanmanager');
    Route::get('downloadbo/{id}/{filetype}', 'ManagerController@downloadbo');
    Route::get('downloadinv/{id}/{filetype}', 'ManagerController@downloadinv');
    Route::get('browse_loans', 'InvestorApplicationController@browseloans');
    Route::get('invest_now/{id}', 'InvestorApplicationController@investnow');
    Route::post('add_investment', 'InvestorApplicationController@addinvestment');
    Route::get('bo_loanpayment', 'BusinessOwnerApplicationController@loanpayment');
});
Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
Route::get('/{any}', function ($any) {
    return redirect('/');
})->where('any', '.*');
