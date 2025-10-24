<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/new',function(){
    return view('new');
});

//Redirect Example
// Route::redirect("/home", "new");

// Route::view("/about", "about");
Route::get("/about/{name}", function($name){
    echo $name;
    return view("about",["name" => $name]);
});

//UserControlller
Route::get("user",[UserController::class,"getUser"]);

Route::get("userName/{name}",[UserController::class,"getUserName"]);    


//nested view
// Route