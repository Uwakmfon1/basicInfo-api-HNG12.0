<?php

use App\Http\Controllers\BasicInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/basic-info',function(){
    return response()->json([
        'email'=>"udohuwakmfon2@gmail.com",
        'current_datetime'=>now()->toIso8601String(),
        'github_url' => "<https://github.com/Uwakmfon1/basicInfo-api-HNG12.0>"
    ],200);
});

