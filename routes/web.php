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

//vai acessar o BookController e acessar o método index dentro do Controller
Route::get('/', function(){
    return view('index');
});

Route::get('/teste', function(){
    return view('templates.menu');
});

Route::get('menu', function(){
    return view('templates.menu');
}); 

