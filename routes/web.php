<?php

/*
|----------------------------------- ---------------------------------------
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','admin']], function(){
  
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
});

Route::get('/roleregister', 'Admin\DashboardController@registered');
Route::get('/register-edit/{id}','Admin\DashboardController@registeredit');
Route::put('/role-update/{id}','Admin\DashboardController@registerupdate');
Route::delete('/register-delete/{id}','Admin\DashboardController@roledelete');


Route::get('/abouts', 'Admin\Aboutusontroller@about');
Route::post('/save-aboutus','Admin\Aboutusontroller@saveabout');
Route::get('/abouts/{id}', 'Admin\Aboutusontroller@aboutedit');
/*
Route::put('/role-update/{id}','Admin\DashboardController@registerupdate');
Route::delete('/register-delete/{id}','Admin\DashboardController@roledelete');

-->*/

});
