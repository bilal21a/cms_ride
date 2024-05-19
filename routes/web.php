<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'RideController@index')->name('ride');


Route::middleware(['auth'])->group(function () {

    Route::post('update_content', 'Admin\ContentController@update')->name('admin.update_content');
    Route::get('/home', 'Admin\HomeController@ride_page')->name('admin.index');


    Route::get('/admin/change_password/index', 'Admin\ChangePasswordController@index')->name('admin.change_password_index');
    Route::post('/admin/change_password', 'Admin\ChangePasswordController@ChangePassword')->name('admin.change_password');
    Route::get('logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');
});
