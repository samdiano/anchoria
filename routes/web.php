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
Route::get('/liquidity', 'PagesController@liquidity')->name('liquidity');
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
Route::post('/admin/sliders/edit/{id}', 'AdminController@slidersEditPost')->name('who');
Route::get('/admin/sliders/delete/{id}', 'AdminController@slidersDelete')->name('who');


Route::get('/admin/services', 'AdminController@service')->name('services');
Route::post('/admin/services', 'AdminController@servicePost')->name('servicesPost');
Route::post('/admin/services/edit/{id}', 'AdminController@serviceEditPost')->name('who');
Route::get('/admin/services/delete/{id}', 'AdminController@serviceDelete')->name('who');


Route::get('/admin/who', 'AdminController@who')->name('who');
Route::post('/admin/who', 'AdminController@whoPost')->name('whoPost');

Route::get('/admin/leadership', 'AdminController@leadership')->name('who');
Route::post('/admin/leadership', 'AdminController@leadershipPost')->name('who');

Route::get('/admin/leadership/add', 'AdminController@leadershipAdd')->name('who');
Route::post('/admin/leadership/add', 'AdminController@leadershipAddPost')->name('whoPost');

Route::get('/admin/leadership/edit/{id}', 'AdminController@leadershipEdit')->name('who');
Route::post('/admin/leadership/edit/{id}', 'AdminController@leadershipEditPost')->name('whoPost');

Route::post('/admin/leadership/ranking/{id}', 'AdminController@leadershipRankingPost')->name('whoPost');

Route::get('/admin/multi-family', 'AdminController@multiFamily')->name('who');
Route::post('/admin/multi-family', 'AdminController@multiFamilyPost')->name('who');

Route::post('/admin/features/add', 'AdminController@featureAddPost')->name('who');
Route::post('/admin/features/edit/{id}', 'AdminController@featureEditPost')->name('who');
Route::get('/admin/features/delete/{id}', 'AdminController@featureDelete')->name('who');

Route::get('/admin/portfolio', 'AdminController@portfolio')->name('who');
Route::post('/admin/portfolio', 'AdminController@portfolioPost')->name('who');

Route::post('/admin/portfolio-services/add', 'AdminController@portfolioServiceAddPost')->name('who');
Route::post('/admin/portfolio-services/edit/{id}', 'AdminController@portfolioServiceEditPost')->name('who');
Route::get('/admin/portfolio-services/delete/{id}', 'AdminController@portfolioServiceDelete')->name('who');

Route::get('/admin/liquidity', 'AdminController@liquidity')->name('who');
Route::post('/admin/liquidity', 'AdminController@liquidityPost')->name('who');

Route::post('/admin/benefits/liquidity/add', 'AdminController@benefitLiquidityAddPost')->name('who');
Route::post('/admin/benefits/liquidity/edit/{id}', 'AdminController@benefitLiquidityEditPost')->name('who');
Route::get('/admin/benefits/liquidity/delete/{id}', 'AdminController@benefitLiquidityDelete')->name('who');

Route::get('/admin/structured-products', 'AdminController@structured')->name('who');
Route::post('/admin/structured-products', 'AdminController@structuredPost')->name('who');

Route::post('/admin/benefits/add', 'AdminController@benefitAddPost')->name('who');
Route::post('/admin/benefits/edit/{id}', 'AdminController@benefitEditPost')->name('who');
Route::get('/admin/benefits/delete/{id}', 'AdminController@benefitDelete')->name('who');


Route::get('/admin/research', 'AdminController@research')->name('who');
Route::post('/admin/research', 'AdminController@researchPost')->name('who');

Route::post('/admin/reports/add', 'AdminController@reportAddPost')->name('who');
Route::post('/admin/reports/edit/{id}', 'AdminController@reportEditPost')->name('who');
Route::get('/admin/reports/delete/{id}', 'AdminController@reportDelete')->name('who');

Route::get('/admin/faq', 'AdminController@faq')->name('who');
Route::post('/admin/faq/add', 'AdminController@faqAddPost')->name('who');
Route::post('/admin/faq/edit/{id}', 'AdminController@faqEditPost')->name('who');
Route::get('/admin/faq/delete/{id}', 'AdminController@faqDelete')->name('who');
