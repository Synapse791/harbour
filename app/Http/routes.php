<?php

Route::group(['middleware' => ['web']], function () {
  Route::get('/', 'IndexController@containers');
});
