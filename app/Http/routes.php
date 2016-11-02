<?php


Route::get('/login' , 'AccountController@login');
Route::post('/login' , 'AccountController@submitLogin');

Route::get('/test' , 'WelcomeController@test');
Route::get('/show/{id}' ,  'WelcomeController@show');


Route::group(['middleware' => ['web']], function () {

    Route::get('/' , 'WelcomeController@index');
    Route::get('user/Invited' , 'AccountController@invited');
    Route::get('user/Help' , 'UserHelp@index');
    Route::get('user/Help/show' , 'UserHelp@show');
    Route::get('out' , 'UserProfile@out');
    Route::get('wallet' , 'Balance@wallet');
    Route::get('takeMoney' , 'Balance@takeMoney');
    Route::post('takeMoney' , 'Balance@takeMoneySubmit');
    Route::get('takeMoneyLog' , 'Balance@takeMoneyLog');



});
