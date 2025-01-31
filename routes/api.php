<?php



use Illuminate\Support\Facades\Route;




Route::get('/basic-info', function(){

    return response()->json([
        'email'=>"udohuwakmfon2@gmail.com",
        'current_datetime'=>now()->utc()->format('Y-m-d\TH:i:s\Z'),
        'github_url' => "https://github.com/Uwakmfon1/basicInfo-api-HNG12.0"
    ],200);
});

