<?php
use App\Http\Controllers\admin\adminController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('admin', [adminController::class, 'index']);
});

Route::get('crud', 'CrudController@index');
Route::get('crud/create', 'CrudController@create');
Route::get('crud/edit', 'CrudController@edit');
Route::post('crud', 'CrudController@store');
Route::delete('crud/{id}', 'CrudController@hapus');

Route::get('crud/{id}/edit', 'CrudController@edit');
Route::put('crud/{id}', 'CrudController@update');