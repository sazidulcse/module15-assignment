<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        $data = [
            "id" => $id,
            "name" => "Donal Trump",
            "age" => "75"
        ];
// cookie section
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER["SERVER_NAME"];
        $secure = false;
        $httpOnly = true;

       $cookie = Cookie::make($name,$value,$minutes,$path,$domain,$secure,$httpOnly);
       
        return response(["data"=>$data,"status"=>200])->cookie($cookie);
    }
}
