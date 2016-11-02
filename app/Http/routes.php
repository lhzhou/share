<?php


Route::get('/Login' , 'AccountController@login');
Route::post('/Login' , 'AccountController@submitLogin');
Route::get('/Register' , 'AccountController@register');
Route::post('/Register' , 'AccountController@registerSubmit');

Route::get('out' , 'WelcomeController@out');


Route::get('/test' , 'WelcomeController@test');
Route::get('/show/{id}' ,  'WelcomeController@show');


Route::group(['middleware' => ['web']], function () {

    Route::get('/' , 'WelcomeController@index');
    Route::get('Invited' , 'AccountController@invited');
    Route::get('Help' , 'UserHelp@index');
    Route::get('Help/Show' , 'UserHelp@show');

    Route::get('Wallet' , 'BalanceController@wallet');
    Route::get('Wallet/Withdrawals' , 'BalanceController@withdrawals');
    Route::post('Wallet/Withdrawals' , 'BalanceController@withdrawalsSubmit');
    Route::get('Wallet/Withdrawals/Log' , 'BalanceController@withdrawalsLog');



});
