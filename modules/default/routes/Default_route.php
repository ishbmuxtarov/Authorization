<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Route::prefix("test", function(){
  Route::get("route","test/route"); // => Route::named('test')
});

Route::get("register","auth/register/index");
Route::post("register","auth/register/action");
Route::get("login","auth/login");
Route::post("login","auth/authenticated");
Route::get("profile","auth/profile");
