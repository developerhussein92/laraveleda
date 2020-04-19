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

Route::prefix('customers')->group(function(){

  Route::get('', 'CustomersController@index');

  Route::post('', 'CustomersController@store');

  Route::get('create', 'CustomersController@new');
  Route::get('deleted', 'CustomersController@alldeleted');
  Route::get('restoreall','CustomersController@restoreall');
  Route::get('multiplerestore','CustomersController@multiplerestore');



  Route::get('search_by_phone','CustomersController@search_by_phone');
  Route::post('search_by_phone','CustomersController@result_by_phone');

  Route::get('search_by_name','CustomersController@search_by_name');
  Route::post('search_by_name','CustomersController@result_by_name');

  Route::get('search_by_email','CustomersController@search_by_email');
  Route::post('search_by_email','CustomersController@result_by_email');

  Route::get('search_by_address','CustomersController@search_by_address');
  Route::post('search_by_address','CustomersController@result_by_address');

  Route::get('search_by_fields','CustomersController@search_by_fields');
  Route::post('search_by_fields','CustomersController@result_by_fields');

  Route::get('dynamic_search','CustomersController@dynamic_search');
  Route::post('dynamic_search','CustomersController@result_dynamic_search');

  Route::get('{id}', 'CustomersController@show');

  Route::get('{id}/edit', 'CustomersController@edit');

  Route::put('{id}', 'CustomersController@update');


  Route::delete('{id}/delete','CustomersController@destroy');

  Route::get('{id}/restore','CustomersController@restore_customer');

});



// End customer controller route



/**Start Cities Controller Route  */

  Route::prefix('cities')->group(function(){
    Route::get('','CitiesController@index');
    Route::get('create','CitiesController@create');
    Route::post('','CitiesController@store');
    Route::delete('{id}/delete','CitiesController@destroy'); 
    Route::get('{id}/edit','CitiesController@edit');
    Route::put('{id}/update','CitiesController@update');
    Route::get('deleted','CitiesController@alldeleted');
    Route::get('{id}/restore','CitiesController@restore');
    Route::get('restoreall','CitiesController@restoreall');
    Route::get('forcedelete','CitiesController@forcedelete');
    Route::get('{id}/forcedelete','CitiesController@cityforcedelete');
    
  });

/**End Cities Controller Route  */