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
    return view('index');
});

Route::post('send-mail', 'HomeController@sendMail')->name('send-mail');

Route::get('/docs', function () {
    return redirect()->route('docVersion', ['version' => '0.1']);
})->name('docs');

Route::get('docs/{version}', 'DocController@version')->name('docVersion');
Route::get('docs/{version}/{slug}', 'DocController@page')->name('docVersionPage');

Route::group(['prefix' => 'admin'], function () {
    Admin::routes();
});
