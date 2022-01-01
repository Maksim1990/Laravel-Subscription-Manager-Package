<?php

Route::get('subscription-manager', function () {
    echo 'Welcome To Subscription Manager';
});

Route::get('subscription-manager-dashboard', 'MaksimN\SubscriptionManager\Http\Controllers\SubscriptionManagerController@dashboard');

Route::group(['prefix' => 'api/v1'], function () {
    Route::post('sm-subscribe', 'MaksimN\SubscriptionManager\Http\Controllers\SubscriptionManagerController@subscribe');
    Route::post('sm-unsubscribe', 'MaksimN\SubscriptionManager\Http\Controllers\SubscriptionManagerController@unsubscribe');
});
