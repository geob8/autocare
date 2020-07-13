<?php

use Illuminate\Support\Facades\Route;

// use App\Mail\WelcomeMail;
// use Illuminate\Support\Facades\Mail;

// Route::get('/email', function () {
//     Mail::to('email@email.com')->send(new WelcomeMail());

//     return new WelcomeMail();
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

//Booking
Route::get('/bookings', 'BookingController@index');
Route::get('/bookings/create', 'BookingController@create');
Route::post('/bookings', 'BookingController@store');
Route::get('/bookings/{booking}', 'BookingController@show');
Route::get('/bookings/{booking}/edit', 'BookingController@edit');
Route::patch('/bookings/{booking}', 'BookingController@update');
Route::delete('/bookings/{booking}', 'BookingController@destroy');

//Customer
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::patch('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');
Route::get('/search', 'CustomerController@search');

//Vehicle
Route::get('/vehicles', 'VehicleController@index');
Route::get('/vehicles/create', 'VehicleController@create');
Route::post('/vehicles', 'VehicleController@store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show');
Route::get('/vehicles/{vehicle}/edit', 'VehicleController@edit');
Route::patch('/vehicles/{vehicle}', 'VehicleController@update');
Route::delete('/vehicles/{vehicle}', 'VehicleController@destroy');

//Automotive Services
Route::view('/option', 'option.service');
Route::view('/extensive', 'subviews.extensive');
Route::view('/logbook', 'subviews.logbook');
Route::view('/essential', 'subviews.essential');
Route::view('/wd', 'subviews.wd');

//Payment
Route::get('/payments', 'PaymentController@index');
Route::get('/payments/create', 'PaymentController@create');
Route::post('/charge', 'PaymentController@charge');

//Settings- new Mechanic
Route::view('/settings', 'setting.setting');
Route::get('/mechanics', 'MechanicController@index');
Route::get('/mechanics/create', 'MechanicController@create');
Route::post('/mechanics', 'MechanicController@store');
Route::get('/mechanics/{mechanic}', 'MechanicController@show');
Route::get('/mechanics/{mechanic}/edit', 'MechanicController@edit');
Route::patch('/mechanics/{mechanic}', 'MechanicController@update');
Route::delete('/mechanics/{mechanic}', 'MechanicController@destroy');

//Settings- new Adviser
Route::get('/advisers', 'AdviserController@index');
Route::get('/advisers/create', 'AdviserController@create');
Route::post('/advisers', 'AdviserController@store');
