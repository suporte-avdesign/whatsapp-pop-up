<?php

Route::get('/', 'Web\WatsAppController@index')->name('whatsapp');
Route::get('teste/{code}', 'Web\WatsAppController@teste')->name('teste');

Route::get('whatsapp', 'Web\WatsAppController@index')->name('whatsapp');
Route::get('script/{code}', 'Web\WatsAppController@getLayout')->name('script');
Route::get('iframe-web/{code}', 'Web\WatsAppController@getIframeWeb')->name('iframe-web');
Route::get('iframe-mobile/{code}', 'Web\WatsAppController@getIframeMobile')->name('iframe-mobile');
Route::post('message/{code}', 'Web\WatsAppController@postMessage')->name('message');
Route::post('data/{code}', 'Web\WatsAppController@postData')->name('data');

