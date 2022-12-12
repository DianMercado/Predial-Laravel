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

Route::resource('/contribuyentes', 'ContribuyenteController');
Route::resource('/paybills', 'PayBillsController');
Route::resource('/discounts', 'DiscountController');
Route::resource('/user', 'UserController');
Route::resource('/user/{id}/edit', 'UserController@edit');

Route::get('/contribuyente/pago', 'ContribuyenteController@index');
Route::get("delete/{id}","PayBillsController@destroy");
Route::get("/discounts/delete/{id}","DiscountController@destroy");
Route::resource('/indexdescarga', 'PDFController');
Route::get('/verdescarga', 'PDFController@show');
Route::get("/pdf","PDFController@PDF")->name("descargarPDF");
Route::get("/pdfdiscount","PDFController@PDFDiscount")->name("descargarPDFDiscount");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
