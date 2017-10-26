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
    $data = [
        'title' => 'SIAKAD'
    ];
    return view('welcome', $data);
});

Route::get('/admin', function (){
    $data = [
        'title' => 'SIAKAD | Admin'
    ];

    return view('welcome', $data);
});
