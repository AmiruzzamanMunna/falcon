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
Route::get('/UserRegistration','UserController@signUP')->name('user.signUP');
Route::post('/UserRegistration','UserController@signUPStore')->name('user.signUPStore');

Route::get('/userlogin','UserController@login')->name('user.login');
Route::post('/userlogin','UserController@loginCheck')->name('user.loginCheck');
Route::get('/logout','UserController@logout')->name('user.logout');

Route::get('/account','UserController@userAccount')->name('user.userAccount');

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

Route::get('/gadgetpage/{name}','UserController@gadgetPage')->name('user.gadgetPage');

Route::get('/household-index', 'UserController@houseHoldIndex')->name('user.houseHoldIndex');

Route::get('/household/cusionspage/{name}','UserController@cushions')->name('user.cushions');
Route::get('/household/throwsBlanketspage/{name}','UserController@throwsBlankets')->name('user.throwsBlankets');
Route::get('/household/mirrorspage/{name}','UserController@mirrors')->name('user.mirrors');
Route::get('/household/curtainspage/{name}','UserController@curtains')->name('user.curtains');

Route::get('/furnitureindex','UserController@furnitureIndex')->name('user.furnitureIndex');
Route::get('/furniture/sofaspage/{name}','UserController@sofas')->name('user.sofas');
Route::get('/furniture/chairspage/{name}','UserController@chairs')->name('user.chairs');
Route::get('/furniture/ottomanspage/{name}','UserController@ottomans')->name('user.ottomans');
Route::get('/furniture/tablespage/{name}','UserController@tables')->name('user.tables');
Route::get('/furniture/entertainmentCenterpage/{name}','UserController@entertainmentCenter')->name('user.entertainmentCenter');
Route::get('/furniture/bedRoomspage/{name}','UserController@bedRooms')->name('user.bedRooms');

Route::get('/toysShowIndex', 'UserController@toysShowIndex')->name('user.toysShowIndex');
Route::get('/toysShow/toyspage/{name}','UserController@mirrors')->name('user.toys');
Route::get('/toysShow/showpiecepage/{name}','UserController@showPieces')->name('user.showPieces');


Route::get('/giftIndex/{name}', 'UserController@giftIndex')->name('user.giftIndex');

Route::get('/flowersindex','UserController@flowersIndex')->name('user.flowersindex');
Route::get('/flowers/romancepage/{name}','UserController@romance')->name('user.romance');
Route::get('/flowers/anniversarypage/{name}','UserController@anniversary')->name('user.anniversary');
Route::get('/flowers/rosespage/{name}','UserController@roses')->name('user.roses');
Route::get('/flowers/birthdaypage/{name}','UserController@birthday')->name('user.birthday');
Route::get('/flowers/thankyou/{name}','UserController@thankyou')->name('user.thankyou');
Route::get('/flowers/sympathypage/{name}','UserController@sympathy')->name('user.sympathy');

Route::get('/books&magazineindex','UserController@booksIndex')->name('user.booksIndex');
Route::get('/books&magazine/bookspage/{name}','UserController@books')->name('user.books');
Route::get('/books&magazine/magazinepage/{name}','UserController@magazine')->name('user.magazine');

Route::get('/food&groceriesindex','UserController@foodIndex')->name('user.foodIndex');
Route::get('/food&groceries/groceriespage/{name}','UserController@groceries')->name('user.groceries');
Route::get('/food&groceries/breadBakerypage/{name}','UserController@breadBakery')->name('user.breadBakery');
Route::get('/food&groceries/fruitsVegitablespage/{name}','UserController@fruitsVegitables')->name('user.fruitsVegitables');
Route::get('/food&groceries/meatFishpage/{name}','UserController@meatFish')->name('user.meatFish');
Route::get('/food&groceries/freshMilkpage/{name}','UserController@freshMilk')->name('user.freshMilk');

Route::get('/event-index', 'UserController@eventIndex')->name('user.eventIndex');
Route::get('/event/page', 'UserController@weddingEventPage')->name('user.weddingEventPage');
Route::get('/event/birthdaypage', 'UserController@birthdayEventPage')->name('user.birthdayEventPage');
Route::get('/event/hospitalitypage', 'UserController@HospitalityEventPage')->name('user.HospitalityEventPage');
Route::get('/event/otherspage', 'UserController@othersEventPage')->name('user.othersEventPage');
Route::get('/event/otherspage', 'UserController@othersEventPage')->name('user.othersEventPage');
Route::get('/lighting', 'UserController@lightIndex')->name('user.lightIndex');

Route::get('/famous&tradational-index', 'UserController@famousTradionalIndex')->name('user.famousTradionalIndex');
Route::get('/famous&tradational/nakshikathaPage/{name}', 'UserController@nakshikatha')->name('user.nakshikatha');
Route::get('/famous&tradational/potteryTerracottaPage/{name}', 'UserController@potteryTerracotta')->name('user.potteryTerracotta');
Route::get('/famous&tradational/shitolpatiPage/{name}', 'UserController@shitalPati')->name('user.shitalPati');

Route::get('/parts&accessories-index', 'UserController@partsAccessoriesIndex')->name('user.partsAccessoriesIndex');
Route::get('/parts&accessories/bikespage/{name}', 'UserController@bikes')->name('user.bikes');
Route::get('/parts&accessories/carspage/{name}', 'UserController@cars')->name('user.cars');

Route::get('/medicineEmergency-Index', 'UserController@medicineEmergencyIndex')->name('user.medicineEmergencyIndex');
Route::get('/medicineEmergency/medicinepage/{name}', 'UserController@medicine')->name('user.medicine');
Route::get('/medicineEmergency/fastaidkitpage/{name}', 'UserController@fastAidKit')->name('user.fastAidKit');

Route::get('/search/','UserController@searchItem')->name('user.searchItem');

Route::get('/productDetails/{id}','UserController@productDetails')->name('productDetails');
Route::get('/orderDetails/{id}','UserController@customerOrder')->name('user.customerOrder');

Route::get('/cart','CartController@cartIndex')->name('cart.cartIndex');
Route::post('/cart/add','CartController@addCart')->name('cart.addCart');
Route::get('/cart/edit/{id}','CartController@cartEdit')->name('cart.cartEdit');
Route::post('/cart/edit/{id}','CartController@cartUpdate')->name('cart.cartUpdate');
Route::get('/cart/remove/{id}','CartController@cartRemove')->name('cart.cartRemove');

Route::get('/checkout','OrderController@checkOut')->name('order.checkOut');
Route::post('/checkout','OrderController@checkOutStore')->name('order.checkOutStore');

Route::get('/invoice/{id}','UserController@invoiceIndex')->name('user.invoice');
Route::get('/download/{id}','PdfController@pdfdownload')->name('pdf.pdfdownload');


// Admin Panel

Route::get('/admin/index','AdminController@adminLogin')->name('admin.adminLogin');
Route::post('/admin/index','AdminController@adminLoginVerify')->name('admin.adminLoginVerify');
Route::get('/admin/logout','AdminController@logOut')->name('admin.logOut');

Route::get('/admin/home','AdminController@index')->name('admin.index');
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
Route::get('/admin/viewproduct','ProductController@viewAllproduct')->name('product.viewAllproduct');
Route::get('/admin/productedit/{id}','ProductController@productEdit')->name('product.productEdit');
Route::post('/admin/productedit/{id}','ProductController@editProductStore')->name('product.editProductStore');
Route::get('/admin/productdelete/{id}','ProductController@deleteProduct')->name('product.deleteProduct');

Route::get('/admin/order','OrderController@orderShow')->name('order.orderShow');
Route::get('/admin/orderinfo/{id}','OrderController@orderInfoShow')->name('order.orderInfoShow');

Route::get('/admin/statusdelivered/{id}','OrderController@statusdelivered')->name('order.statusdelivered');
Route::get('/admin/statuscancel/{id}','OrderController@statuscancel')->name('order.statuscancel');
