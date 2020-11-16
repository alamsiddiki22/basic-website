<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return 'bfghbkfn';
//    return view('front-end.home.home');
//});
//
Route::get('/',[BasicController ::class,'index'])->name('/');

Route::get('/category',[BasicController ::class,'categoryProduct'])->name('category-product');

Route::get('/about',[BasicController ::class,'categoryAbout'])->name('about');

Route::get('/private',[BasicController ::class,'categoryPrivate'])->name('private');

Route::get('/post',[BasicController ::class,'categoryPost'])->name('post');

Route::get('/contuct',[BasicController ::class,'categoryContuct'])->name('contuct');
Route::get('/home',[BusinessController ::class,'admin'])->name('admin');
//Route::get('/home',[BasicController ::class,'admin'])->name('admin');
Route::get('/category/add',[CategoryController::class,'index'])->name('add-category');
Route::get('/category/manage',[CategoryController::class,'manageCategory'])->name('manage-category');
Route::post('/category/save',[CategoryController::class,'saveCategory'])->name('new-category');
Route::get('/login',[CategoryController::class,'login'])->name('login');

//Route::get('/','BananaController@index' );

//Route::get('/', [
//    'uses' => BasicController ::class,'index',
//    'as'  => '/'
//]);

//Route::get('/category', [
//    'uses' => 'BasicController@categoryProduct',
//    'as'   => 'category-product'
//]);

//Route::get('/about', [
//    'uses' => 'BasicController@categoryAbout',
//    'as'   => 'about'
//]);



Auth::routes();

Route::get('/me', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


