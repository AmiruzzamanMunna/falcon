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

Route::get('/', 'UserController@index')->name('user.index');
Route::get('/ladies-index', 'UserController@ladiesIndex')->name('user.ladiesIndex');
Route::get('/ladies/clothingpage/{name}','UserController@ladiesClothing')->name('user.ladiesClothing');
Route::get('/ladies/Juwellaypage/{name}','UserController@ladiesJuwellay')->name('user.ladiesJuwellay');
Route::get('/ladies/Cosmaticpage/{name}','UserController@ladiesCosmatic')->name('user.ladiesCosmatic');
Route::get('/ladies/Shoespage/{name}','UserController@ladiesShoes')->name('user.ladiesShoes');

Route::get('/gents-index', 'UserController@gentsIndex')->name('user.gentsIndex');
Route::get('/gents/clothingpage/{name}','UserController@gentsClothing')->name('user.gentsClothing');
Route::get('/gents/Cosmaticpage/{name}','UserController@gentsCosmatic')->name('user.gentsCosmatic');
Route::get('/gents/Shoespage/{name}','UserController@gentsShoes')->name('user.gentsShoes');

Route::get('/leather-index', 'UserController@leatherIndex')->name('user.leatherIndex');
Route::get('/leather/bagpage/{name}','UserController@leatherBag')->name('user.leatherBag');
Route::get('/leather/beltpage/{name}','UserController@leatherBelt')->name('user.leatherBelt');
Route::get('/leather/Shoespage/{name}','UserController@leatherShoes')->name('user.leatherShoes');

Route::get('/electric-index', 'UserController@electricIndex')->name('user.electricIndex');
Route::get('/computeraccessoriespage/{name}','UserController@computerAccessories')->name('user.computerAccessories');
Route::get('/electronicspage/{name}','UserController@electronics')->name('user.electronics');
Route::get('/securityServillancepage/{name}','UserController@securityServillance')->name('user.securityServillance');

Route::get('/event-index', 'UserController@eventIndex')->name('user.eventIndex');
Route::get('/event/page', 'UserController@weddingEventPage')->name('user.weddingEventPage');
Route::get('/event/birthdaypage', 'UserController@birthdayEventPage')->name('user.birthdayEventPage');
Route::get('/event/hospitalitypage', 'UserController@HospitalityEventPage')->name('user.HospitalityEventPage');
Route::get('/event/otherspage', 'UserController@othersEventPage')->name('user.othersEventPage');
Route::get('/event/otherspage', 'UserController@othersEventPage')->name('user.othersEventPage');
Route::get('/lighting', 'UserController@lightIndex')->name('user.lightIndex');
Route::get('/famous&tradational-index', 'UserController@famousTradionalIndex')->name('user.famousTradionalIndex');
Route::get('/parts&accessories-index', 'UserController@partsAccessoriesIndex')->name('user.partsAccessoriesIndex');
Route::get('/medicineEmergency-Index', 'UserController@medicineEmergencyIndex')->name('user.medicineEmergencyIndex');


// Admin

Route::get('/admin/index','AdminController@index')->name('admin.index');
Route::get('/admin/event-index','AdminController@eventIndex')->name('admin.eventIndex');
Route::get('/admin/event-indexedit/{id}','AdminController@eventIndexEdit')->name('admin.eventIndexEdit');
Route::post('/admin/event-indexedit/{id}','AdminController@eventIndexUpdate')->name('admin.eventIndexUpdate');

Route::get('/admin/weddingevent','AdminController@eventWedding')->name('admin.eventWedding');
Route::get('/admin/weddingupdate/{id}','AdminController@weddingEdit')->name('admin.weddingEdit');
Route::post('/admin/weddingupdate/{id}','AdminController@weddingUpdate')->name('admin.weddingUpdate');

Route::get('/admin/birthdayevent','AdminController@eventBirthday')->name('admin.eventBirthday');
Route::get('/admin/birthdayedit/{id}','AdminController@eventBirthdayEdit')->name('admin.eventBirthdayEdit');
Route::post('/admin/birthdayedit/{id}','AdminController@eventBirthdayUpdate')->name('admin.eventBirthdayUpdate');

Route::get('/admin/hospitalityevent','AdminController@eventHospitality')->name('admin.eventHospitality');
Route::get('/admin/hospitalityedit/{id}','AdminController@eventHospitalityEdit')->name('admin.eventHospitalityEdit');
Route::post('/admin/hospitalityedit/{id}','AdminController@eventHospitalityUpdate')->name('admin.eventHospitalityUpdate');

Route::get('/admin/othersevent','AdminController@eventOthers')->name('admin.eventOthers');
Route::get('/admin/otherseventedit/{id}','AdminController@eventOthersEdit')->name('admin.eventOthersEdit');
Route::post('/admin/otherseventedit/{id}','AdminController@eventOthersUpdate')->name('admin.eventOthersUpdate');

Route::get('/admin/lighting','AdminController@lighIndex')->name('admin.lighIndex');
Route::get('/admin/lightingedit/{id}','AdminController@lightIndexEdit')->name('admin.lightIndexEdit');
Route::post('/admin/lightingedit/{id}','AdminController@lightIndexUpdate')->name('admin.lightIndexUpdate');

Route::get('/admin/famous&tradationaledit/{id}','AdminController@famousTraditionalEdit')->name('admin.famousTraditionalEdit');
Route::post('/admin/famous&tradationaledit/{id}','AdminController@famousTraditionalUpdate')->name('admin.famousTraditionalUpdate');

Route::get('/admin/parts&accessoriesedit/{id}','AdminController@partsAccessoriesEdit')->name('admin.partsAccessoriesEdit');
Route::post('/admin/parts&accessoriesedit/{id}','AdminController@partsAccessoriesUpdate')->name('admin.partsAccessoriesUpdate');

Route::get('/admin/medicine&emergency/{id}','AdminController@medicineAccessoriesEdit')->name('admin.medicineAccessoriesEdit');
Route::post('/admin/medicine&emergency/{id}','AdminController@medicineAccessoriesUpdate')->name('admin.medicineAccessoriesUpdate');

Route::get('/admin/product/new','ProductController@index')->name('product.index');
Route::post('/admin/product/new','ProductController@productStore')->name('product.productStore');