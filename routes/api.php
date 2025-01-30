<?php

use App\Http\Controllers\BasicInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/get-basic-info',[BasicInfoController::class,'index']);

