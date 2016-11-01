<?php


Route::get('/login' , 'AccountController@login');
Route::post('/login' , 'AccountController@submitLogin');

Route::get('/test' , 'Welcome@test');
Route::get('/show/{id}' ,  'Welcome@show');


Route::group(['middleware' => ['web']], function () {

    Route::get('/' , 'Welcome@index');
    Route::get('user/Invited' , 'UserProfile@invited');
    Route::get('user/Help' , 'UserHelp@index');
    Route::get('user/Help/show' , 'UserHelp@show');
    Route::get('out' , 'UserProfile@out');
    Route::get('wallet' , 'Balance@wallet');
    Route::get('takeMoney' , 'Balance@takeMoney');
    Route::post('takeMoney' , 'Balance@takeMoneySubmit');
    Route::get('takeMoneyLog' , 'Balance@takeMoneyLog');



});
