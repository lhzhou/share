<?php


Route::get('/Login' , 'AccountController@login');

Route::get('/Register' , 'AccountController@register');



Route::get('/test' , 'WelcomeController@test');
Route::get('/show/{id}' ,  'WelcomeController@show');


Route::group(['middleware' => ['web']], function () {

    Route::post('/Register' , 'AccountController@registerSubmit');
    Route::post('/Login' , 'AccountController@submitLogin');


    Route::get('/' , 'WelcomeController@index');

    Route::get('user/Invited' , 'AccountController@invited');
    Route::get('user/Help' , 'UserHelp@index');
    Route::get('user/Help/show' , 'UserHelp@show');
    Route::get('out' , 'UserProfile@out');

    Route::get('wallet' , 'BalanceController@wallet');
    Route::get('wallet/Withdrawals' , 'BalanceController@withdrawals');
    Route::post('takeMoney' , 'BalanceController@takeMoneySubmit');
    Route::get('takeMoneyLog' , 'BalanceController@takeMoneyLog');



});
