<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        // return "Raj Sharma";
        return view('user');
    }

    function getUserName($name){
        // return "Hello, This is $name";
        echo "Hello, This is $name";
        return view("getusername", ['name'=>$name]);
    }
}
