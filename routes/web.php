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

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('/who', 'PagesController@who')->name('who');
Route::get('/leadership', 'PagesController@leadership')->name('leadership');
Route::get('/liquiidity', 'PagesController@liquiidity')->name('liquiidity');
Route::get('/research', 'PagesController@research')->name('research');
Route::get('/account_opening', 'PagesController@account_opening')->name('account_opening');
Route::get('/contact_us', 'PagesController@contact_us')->name('contact_us');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/multifamily', 'PagesController@multifamily')->name('multifamily');
Route::get('/mutual_funds', 'PagesController@mutual_funds')->name('mutual_funds');
Route::get('/portfolio', 'PagesController@portfolio')->name('portfolio');
Route::get('/structured_products', 'PagesController@structured_products')->name('structured_products');
Auth::routes();




/*
Admin routes
*/

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/landing', 'AdminController@landing')->name('landing');
Route::post('/admin/landing', 'AdminController@landingPost')->name('landingPost');

Route::get('/admin/sliders', 'AdminController@sliders')->name('slider');
Route::post('/admin/sliders', 'AdminController@slidersPost')->name('slidersPost');

Route::get('/admin/services', 'AdminController@service')->name('services');
Route::post('/admin/services', 'AdminController@servicePost')->name('servicesPost');

Route::get('/admin/who', 'AdminController@who')->name('who');
Route::post('/admin/who', 'AdminController@whoPost')->name('whoPost');


