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

Route::get('/admin/login','Admin\LoginController@loginAdmin')->name('admin.loginAdmin');
Route::get('/admin/loginAdminCheck','Admin\LoginController@loginAdminCheck')->name('admin.loginAdminCheck');


Route::group(['middleware'=>['adminSess'],'prefix' => 'admin'], function () {

    Route::get('/adminLogout','Admin\LoginController@adminLogout')->name('admin.adminLogout');

    Route::get('/','Admin\AdminController@index')->name('admin.index');



    Route::get('/role','Admin\RoleController@roleIndex')->name('admin.roleIndex');
    Route::get('/getRoleList','Admin\RoleController@getRoleList')->name('admin.getRoleList');
    Route::get('/insertRole','Admin\RoleController@insertRole')->name('admin.insertRole');
    Route::get('/editRole','Admin\RoleController@editRole')->name('admin.editRole');
    Route::get('/editRoleUpdate','Admin\RoleController@editRoleUpdate')->name('admin.editRoleUpdate');
    Route::get('/deleteRole','Admin\RoleController@deleteRole')->name('admin.deleteRole');
    Route::get('/rolePermission','Admin\RoleController@rolePermission')->name('admin.rolePermission');
    Route::get('/permissionStore','Admin\RoleController@permissionStore')->name('admin.permissionStore');




    Route::get('/adminListIndex','Admin\AdminRegistrationController@adminListIndex')->name('admin.adminListIndex');
    Route::get('/getAdminList','Admin\AdminRegistrationController@getAdminList')->name('admin.getAdminList');
    Route::post('/insertAdminList','Admin\AdminRegistrationController@insertAdminList')->name('admin.insertAdminList');
    Route::get('/editAdminList','Admin\AdminRegistrationController@editAdminList')->name('admin.editAdminList');
    Route::post('/editAdminListUpdate','Admin\AdminRegistrationController@editAdminListUpdate')->name('admin.editAdminListUpdate');
    Route::get('/deleteAdminList','Admin\AdminRegistrationController@deleteAdminList')->name('admin.deleteAdminList');



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

