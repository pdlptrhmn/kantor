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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

route::get ('/testmodel',function(){
		$q = App\blog::all();
		return $q;
});

route::get ('/produk',function(){
		$a = App\produk::all();
		return $a;
});

route::get ('/pengguna',function(){
		$b = App\pengguna::all();
		return $b;
});

route::get ('/pengaturan',function(){
		$c = App\pengaturan::all();
		return $c;
});

//Route::get('','PrakerinController@percobaan');

//Route::get('halaman/{id}','PrakerinController@param');
//Route::get('/{f}','PrakerinController@parameter');
//Route::get('test','CobaController@test');
Route::get('test/{id}','CobaController@test1');
Route::get('bb','CobaController@indexx');
Route::get('percobaan','CobaController@ulang');
Route::get('/{ata}','CobaController@ff');