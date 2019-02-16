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