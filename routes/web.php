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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    $user= "Hussein Mohamed";

    return view('contact',compact('user'));  
});

// start customer controller route

Route::get('/customers', 'CustomersController@index');

Route::post('/customers', 'CustomersController@store');

Route::get('/customers/create', 'CustomersController@new');
Route::get('/customers/deleted', 'CustomersController@alldeleted');


Route::get('/customers/search_by_phone','CustomersController@search_by_phone');
Route::post('/customers/search_by_phone','CustomersController@result_by_phone');

Route::get('/customers/search_by_name','CustomersController@search_by_name');
Route::post('/customers/search_by_name','CustomersController@result_by_name');

Route::get('/customers/search_by_email','CustomersController@search_by_email');
Route::post('/customers/search_by_email','CustomersController@result_by_email');

Route::get('/customers/search_by_address','CustomersController@search_by_address');
Route::post('/customers/search_by_address','CustomersController@result_by_address');

Route::get('/customers/search_by_fields','CustomersController@search_by_fields');
Route::post('/customers/search_by_fields','CustomersController@result_by_fields');

Route::get('/customers/dynamic_search','CustomersController@dynamic_search');
Route::post('/customers/dynamic_search','CustomersController@result_dynamic_search');





Route::get('/customers/{id}', 'CustomersController@show');

Route::get('/customers/{id}/edit', 'CustomersController@edit');

Route::put('/customers/{id}', 'CustomersController@update');

Route::delete('/customers/{id}/delete','CustomersController@destroy');

Route::get('/customers/{id}/restore','CustomersController@restore_customer');
// End customer controller route







/*
Route::get('/customers', function(){
    return view('customers_list');
});


Route::get('/customers/create', function(){
    return view('new_customer');
});

Route::get('/services', function(){
  $services = ["Export" , "Import" , "Events" , "Trade Missions"];
  $result = "<h1>We offer</h1> <ul>";
    foreach ($services as $service) {
      $result .= "<li>$service</li>";
    }
  $result .= "</ul>";
  return $result;
});


Route::get('/reach', function(){
  $user = request('user');
  return "<h1>Tuse this page for  $user </h1>";
});


Route::get('/products/{pname}', function($pname){
    return "<h1>This page view $pname profile and details </h1>";
});
*/
