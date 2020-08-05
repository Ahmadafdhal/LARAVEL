<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view ("form");
    }
    public function welcomee(){
        return view ("welcomee");
    }
    public function welcomee_post(request $request){
        $first_name = $request["first_name"];
        $last_name = $request["last_name"];
        $name_lengkap = "$first_name $last_name";
        return view ("welcomee", compact('name_lengkap'));
    }
}
