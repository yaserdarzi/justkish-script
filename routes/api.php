<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
if (App::environment() == "production")
    \URL::forceScheme('https');

Route::namespace('Api\V1')->prefix('/v1')->group(function () {

    //Site Before login
    Route::namespace('Site')->prefix('/site')->group(function () {

        //Category
        Route::get('/category', 'CategoryController@index');
        Route::get('/category/products', 'CategoryController@categoryProducts');

        ///User Designer
        Route::get('/user/designer', 'UsersController@userDesigner');

        //project
        Route::get('/projects', 'ProjectsController@indexWithoutLogin');

    });

//    //Zarinpall Callback
//    Route::any('storeProjectPaymentCallback', 'ProjectsController@storeProjectPaymentCallback')->name('project.payment.callback');
//
//    //Auth otp
//    Route::post('auth/otp/sms', 'Auth\ZamanakController@postSmsRequest');
//    Route::post('auth/otp/call', 'Auth\ZamanakController@postCallRequest');
//    Route::post('auth/otp/verify', 'Auth\ZamanakController@postVerifyRequest');
//
//    //Auth email
//    Route::post('auth/email/login', 'Auth\EmailController@postEmailLogin');
//    Route::post('auth/email/register', 'Auth\EmailController@postEmailRegister');


//    //After Login
//    Route::middleware('users.authenticate')->group(function () {
//
//        //Users
//        Route::get('/profile/init', 'UsersController@index');
//        Route::post('/profile/update', 'UsersController@update');
//
//        //Category
//        Route::get('/category', 'CategoryController@index');
//
//        //Category Plan
//        Route::get('category/{category_id}/plan', 'CategoryPlanController@index');
//
//        //Category Timing
//        Route::get('category/{category_id}/timing', 'CategoryTimingController@index');
//
//        //Invoice
//        Route::resource('/invoice', 'InvoiceController', ['only' => ['index']]);
//
//        //Only Customer
//        Route::middleware('users.customer.authenticate')->group(function () {
//
//            //project
//            Route::post('/projects/invoice', 'ProjectsController@projectInvoice');
//            Route::resource('/projects', 'ProjectsController', ['only' => ['index', 'store', 'show']]);
//
//        });
//    });
});

