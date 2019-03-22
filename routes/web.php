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
//    $user = DB::table('users')->where('id', '=', $id)->increment('points');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/testrole', function () {
    return view('welcome');
});


Route::get('/recycling gallery/paper', 'GalleryController@paper');
Route::get('/recycling gallery/food', 'GalleryController@food');
Route::get('/recycling gallery/glass', 'GalleryController@glass');

Route::get('/recycling gallery/electronics', 'GalleryController@electronics');

Route::get('/recycling gallery/steal', 'GalleryController@steal');

Route::get('/recycling gallery/plastic_bages', 'GalleryController@plastic_bages');

Route::get('/recycling gallery/cartons', 'GalleryController@cartons');

Route::get('/recycling gallery/househould', 'GalleryController@househould');

Route::get('/recycling gallery/aluminum', 'GalleryController@aluminum');

Route::get('/recycling gallery/plastic', 'GalleryController@plastic');




Route::get('/makeorder', 'HomeController@makeorder');
Route::post('/makeorder', 'OrderController@store');
Route::post('/makeorder/{order}', 'OrderController@sendordermail');

 //Route::get('/makeorder/{order}', 'OrderController@show')->name('user.makeorder.show');

 Route::get('/makeorder/{order}', 'OrderController@show')->name('user.makeorder.show');

Route::get('/points', 'HomeController@points');
Route::get('/points/earnfromwaste', 'EarnController@earnfromwaste');
Route::get('/points/earnfromwaste/junk-mail', 'EarnController@junkmail');
Route::get('/points/earnfromwaste/sell-and-swap', 'EarnController@sell');
Route::get('/exchange', 'PointController@exchange');
Route::post('/exchange/checkpoints','PointController@check')->name('exchange.check');
Route::post('/exchange/checkpoints1','PointController@check1')->name('exchange.check1');
Route::post('/exchange/checkpoints2','PointController@check2')->name('exchange.check2');

Route::post('/exchange/checkpoints4','PointController@check4')->name('exchange.check4');
Route::post('/exchange/checkpoints5','PointController@check5')->name('exchange.check5');
Route::post('/exchange/checkpoints6','PointController@check6')->name('exchange.check6');

Route::get('/contactus', 'ContactController@getcontactus');
Route::post('/contactus', 'ContactController@postcontactus');

Route::get('/about', 'HomeController@about');

Route::get('/admin', 'AdminController@index');
Route::get('/tables', 'AdminController@showtables');
Route::get('/manageorders', 'OrderController@manageorders');
  
//Route::get('/manageusers', 'UserController@manageusers');
Route::resource('/manageusers', 'UserController');
Route::post('/manageusers/restore/{id}', 'UserController@restore')->name('manageusers.restore');
Route::post('/manageusers/delete-forever/{id}', 'UserController@deleteforever')->name('manageusers.deleteforever');

Route::get('/dashboard', 'ManageController@dashboard');

//admin panel routes
Route::resource('/permissions', 'PermissionController');
Route::resource('/roles', 'RoleController', ['except' => 'destroy']);

Route::get('/user/activation/{token}', 'Auth\RegisterController@userActivation');

 // Route::get('/', 'ManageController@index');

//Route::get('/admin', 'AdminController@users');
Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/facebook', 'FacebookController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');


//Route::get('/', 'AdminOrdersController@index')->name('admin.orders');
/*
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminOrdersController@index')->name('admin.orders');
    Route::get('/orders/edit/{order}', 'AdminOrdersController@edit')->name('admin.orders.edit');
    Route::patch('/orders/{order}', 'AdminOrdersController@update')->name('admin.orders.update');
});*/
Route::get('test', function()
{
	//Config::set('mail.username', 'mahmoud.elokely@gmail.com');
   // Config::set('mail.password', 'M0@12345');

    dd(Config::get('mail'));
});
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::put('/profile/{user}/update', 'UserProfileController@update')->name('profile.update');
Route::put('/profile', 'UserProfileController@update_avatar')->middleware('auth')->name('profile.update_avatar');

Route::get('/profile', 'UserProfileController@profile');

Route::get('/informationandfacts', 'FactController@fact');
Route::get('/informationandfacts/recyclingmagic', 'FactController@magic');
Route::get('/informationandfacts/reduce-population', 'FactController@population');

Route::get('/informationandfacts', 'FactController@fact');
Route::get('/test-admin', 'TestAdminController@index');
Route::get('/test-admin/orders', 'TestAdminController@order')->name('testAdmin.order');;
Route::get('/test-admin/contacts', 'TestAdminController@contact')->name('testAdmin.contact');;
