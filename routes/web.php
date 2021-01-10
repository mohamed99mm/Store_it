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

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/s', function () {
    return view('storea');
});

Route::get('/a/edit', function () {
    return view('edit');
});
Route::get('/borrow', function () {
    return view('borrow');
});
Route::get('/suply', function () {
    return view('supply');
});
Route::get('/a/edit', function () {
    return view('edit');
});
Route::get('/borrow/edit', function () {
    return view('editb');
});
Route::get('/order/edit', function () {
    return view('edits');
});
Route::post('/a/create', 'ItemsControllers@create');
Route::get('/a/show', 'ItemsControllers@index');
Route::get('/a/edit/{id}', 'ItemsControllers@edit');
Route::patch('/a/update/{id}', 'ItemsControllers@update');
Route::get('/a/delete/{id}', 'ItemsControllers@destroy');

ROute::get('/examine','CommitteController@examine');
Route::post('/create', 'CommitteController@create');
Route::get('/show', 'CommitteController@show');
Route::get('/edit/{id}', 'CommitteController@edit');
Route::patch('/update/{id}', 'CommitteController@update');
Route::get('/delete/{id}', 'CommitteController@destroy');

Route::post('/borrow/create', 'BorrowedItems@create');
Route::get('/borrow/output', 'BorrowedItems@index');
Route::get('/borrow/edit/{id}', 'BorrowedItems@edit');
Route::patch('/borrow/update/{id}', 'BorrowedItems@update');
Route::get('/borrow/delete/{id}', 'BorrowedItems@destroy');

Route::post('/order/create', 'OrderedItems@create');
Route::get('/order/record', 'OrderedItems@index');
Route::get('/order/edit/{id}', 'OrderedItems@edit');
Route::patch('/order/update/{id}', 'OrderedItems@update');
Route::get('/order/delete/{id}', 'OrderedItems@destroy');


