<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Route::prefix("test", function(){
  Route::get("route","test/route"); // => Route::named('test')
});

Route::get("register","auth/register/index");
Route::post("register-action","auth/register/action");
Route::get("login","auth/login/index");
Route::post("login","auth/login/action");
Route::get("profile","profile/index");
Route::get("test","profile/index");
