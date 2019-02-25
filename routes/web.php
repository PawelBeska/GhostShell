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
Route::group(['domain' => '{account}.ghostshell.eu'], function () {
    Route::get('/', function ($account, $id) {
        return $account;
    });
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', 'IndexController@index');

});
Route::get('/panel', 'PanelController@index');
Route::post('/login', 'AuthController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/zlecenia', 'OrdersController@myOrders');
    Route::get('/zlecenia/nowe', 'OrdersController@newOrder');
    Route::post('/zlecenia/nowe', 'OrdersController@newOrderUser');
    Route::get('/zlecenia/{order}', 'OrdersController@myOrder');
    Route::get('/zlecenia/{order}/umowa', 'OrdersController@contract');
    Route::get('/wyloguj', function () {
        Auth::logout();
        return \Illuminate\Support\Facades\Redirect::to('/');
    });
});

Route::group(['middleware' =>'permission'],function(){
   Route::get('/zarzadzaj/zlecenia',['uses'=>'OrdersController@manageOrders','permission'=>'url_manage_orders']);
    Route::get('/zarzadzaj/zlecenia/{order}',['uses'=>'OrdersController@manageOrder','permission'=>'url_manage_order']);
});