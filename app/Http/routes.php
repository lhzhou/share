<?php


Route::group(['middleware' => ['web']], function () {
    Route::get('/' , 'Welcome@index');
    Route::get('/login' , 'UserProfile@login');
    Route::post('/login' , 'UserProfile@submitLogin');
    Route::get('user/Invited' , 'UserProfile@invited');
    Route::get('user/Help' , 'UserHelp@index');
    Route::get('user/Help/show' , 'UserHelp@show');
    Route::get('out' , 'UserProfile@out');
    Route::get('wallet' , 'Balance@wallet');
    Route::get('takeMoney' , 'Balance@takeMoney');
    Route::post('takeMoney' , 'Balance@takeMoneySubmit');


});
