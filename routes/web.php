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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});

Route::get('page2', function () {
    return view('page2');
});
Route::get('gif-booth', function () {
    return view('create-gif');
});
Route::get('regular-frame', function () {
    return view('regPage3');
});
Route::get('regular-booth', function () {
    return view('regularBooth');
});
Route::get('gif-result', function () {
    return view('gifresult');
});
Route::get('regular-result', function () {
    return view('regularresult');
});
Route::get('share', function () {
    return view('share');
});
Route::get('end/{type}/{img}', function ($type,$image) {
    return view('end', compact('type','image'));
});

Route::get('email/{status}/{type}/{image}', function ($status,$type,$image) {
    return view('email', compact('status','type','image'));
});

Route::get('email/{email}/{type}/{end}/{image}', function ($email,$type,$end,$image) {
    return view('end', compact('email','type','end','image'));
});

//email
// Route::get('email/{status}/{type}/{image}', 'emailController@index');
//socialite
Route::get('share-facebook', 'redirectController@redirectToProvider');
Route::get('facebook-callback', 'redirectController@handleProviderCallback');
//twitter
Route::get('twitter-share/{status}','twittershareController@index');
Route::get('callback','twittercallback@index');
//upload
Route::post('upload','uploadcontroller@index');
Route::get('postregresult/{resPic}','regresultcoontroller@index');
//merge div to png
Route::post('mergepic','mergecon@index');
Route::get('upload', function () {
    return view('upload');
});
Route::get('creategif/{first}/{second}/{third}','gifcontroller@index');