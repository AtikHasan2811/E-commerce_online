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
/* Front end Location */
//Route::get('/', function () {
//    return view('front.home');
//});





/* admin Location */

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCates')->name('category');
Route::get('productDetail/{id}','HomeController@detailPro');
//....................cartRoute..................................
Route::get('cart/{id}','CardController@index');
Route::get('show-card/','CardController@addItem');
Route::get('delete/{id}','CardController@delete_to_cart');
Route::post('update/','CardController@update');








//.......................................admim group.......................................
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

    Route::get('/', function () {
        return view('admin.index');
    });

Route::resource('/produt','ProdutController');
Route::resource('/category','CategoryController');


});
//.................................end admin group.........................................


//check out route here....................
Route::get('/custom_login','CartChackoutController@custom_login');
Route::post('/customer_registration','CartChackoutController@customer_registration');
Route::get('/checkout','CartChackoutController@checkout');
Route::post('/save-shiping-detelse','CartChackoutController@shepingDetelse');
Route::post('/customer_login','CartChackoutController@customer_login');
Route::get('/chackout','CartChackoutController@chackout');
Route::get('/payment','CartChackoutController@payment');
Route::post('/order-place','CartChackoutController@order_place');



