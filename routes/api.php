<?php


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;




Route::get('/basic-info', function(){
$data = Cache::remember('basic_info',60,function(){
    return [
        'email'=>"udohuwakmfon2@gmail.com",
        'current_datetime'=>now()->toIso8601String(),
        'github_url' => "<https://github.com/Uwakmfon1/basicInfo-api-HNG12.0>"
    ];
});
return response()->json($data);
});

