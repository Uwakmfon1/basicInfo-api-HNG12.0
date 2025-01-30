<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    public function index()
    {
        $email = "udohuwakmfon2@gmail.com";
        $current_datetime = date('c');
        $github_url = "<https://github.com/Uwakmfon1/basicInfo-api-HNG12.0>";


        return response()->json([
            'email'=>$email,
            'current_datetime'=>$current_datetime,
            'github_url' => $github_url
        ],200);
    }
}
