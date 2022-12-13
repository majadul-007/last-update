<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingAPIController;
use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\ProfileAPIController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/myprofile',[ProfileAPIController::class,'MyProfile']);
Route::get('/booking/list',[BookingAPIController::class,'BookingList']);
Route::post('/booking/add',[BookingAPIController::class,'add']);

Route::post('/login',[LoginAPIController::class,'login']); 
Route::post('/logout',[LoginAPIController::class,'logout']); 
