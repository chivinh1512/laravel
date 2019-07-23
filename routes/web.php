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
	$slide=DB::table('slide')->get();
	$product=DB::table('product')->orderBy('id','desc')->paginate(4);
    return view('home',['slide'=>$slide],['product'=>$product]);
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/productdetail/{detail}', function ($detail) {
    $result2=DB::table('product')->where('id',$detail)->get();
    $result3=DB::table('product')->get();
    return view('productdetail',['result2'=>$result2],['result3'=>$result3]);
});
Route::get('/product/{listproduct}', function ($listproduct) {
	$result=DB::table('product')->where('idcata',$listproduct)->get();
    return view('listproduct',['result'=>$result]);
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/product', function () {
	$product=DB::table('product')->orderBy('id','desc')->paginate(8);
    return view('product',['product'=>$product]);
});


