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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','User\UserController@index')->name('user.index');
Route::get('/signUp','User\SignUpController@signUp')->name('user.signUp');
Route::get('/signUpStore','User\SignUpController@signUpStore')->name('user.signUpStore');

Route::get('/login','User\LoginController@login')->name('user.login');
Route::post('/login','User\LoginController@loginCheck')->name('user.loginCheck');

Route::get('/logOut','User\LoginController@logOut')->name('user.logOut');

Route::get('/userProfile','User\ProfileController@userProfile')->name('user.userProfile');
Route::get('/userProfileUpdate','User\ProfileController@userProfileUpdate')->name('user.userProfileUpdate');
Route::get('/deleteUserLinks','User\ProfileController@deleteUserLinks')->name('user.deleteUserLinks');


// Admin Panel Starts from here

Route::group(['prefix' => 'admin'], function () {

    Route::get('/','Admin\AdminController@index')->name('admin.index');
    Route::get('/courseCategoryIndex','Admin\CourseCategoryController@courseCategoryIndex')->name('admin.courseCategoryIndex');
    Route::get('/getCategoryCourseList','Admin\CourseCategoryController@getCategoryCourseList')->name('admin.getCategoryCourseList');
    Route::get('/getSubCategory','Admin\CourseCategoryController@getSubCategory')->name('admin.getSubCategory');
    Route::get('/insertCourseCategory','Admin\CourseCategoryController@insertCourseCategory')->name('admin.insertCourseCategory');
    Route::get('/editCourseCategory','Admin\CourseCategoryController@editCourseCategory')->name('admin.editCourseCategory');
    Route::get('/editCourseCategoryUpdate','Admin\CourseCategoryController@editCourseCategoryUpdate')->name('admin.editCourseCategoryUpdate');
    Route::get('/deleteCourseCategory','Admin\CourseCategoryController@deleteCourseCategory')->name('admin.deleteCourseCategory');


    Route::get('/userList','Admin\RegisteredUserController@userList')->name('admin.userList');
    Route::get('/getUserList','Admin\RegisteredUserController@getUserList')->name('admin.getUserList');
    Route::get('/editUserList','Admin\RegisteredUserController@editUserList')->name('admin.editUserList');
    Route::post('/insertUserList','Admin\RegisteredUserController@insertUserList')->name('admin.insertUserList');
    Route::post('/editUserListUpdate','Admin\RegisteredUserController@editUserListUpdate')->name('admin.editUserListUpdate');
    Route::get('/deleteUserList','Admin\RegisteredUserController@deleteUserList')->name('admin.deleteUserList');


    Route::get('/couponIndex','Admin\CouponController@couponIndex')->name('admin.couponIndex');
    Route::get('/getCouponList','Admin\CouponController@getCouponList')->name('admin.getCouponList');
    Route::get('/insertCoupon','Admin\CouponController@insertCoupon')->name('admin.insertCoupon');
    Route::get('/editCoupon','Admin\CouponController@editCoupon')->name('admin.editCoupon');
    Route::get('/editCouponUpdate','Admin\CouponController@editCouponUpdate')->name('admin.editCouponUpdate');
    Route::get('/deleteCoupon','Admin\CouponController@deleteCoupon')->name('admin.deleteCoupon');
    
});

