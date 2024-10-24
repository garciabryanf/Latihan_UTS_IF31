<?php

use App\Http\Controllers\Api\EventRegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/event-registrations', [EventRegistrationController::class, 'index']);
Route::post('/event-registrations', [EventRegistrationController::class, 'store']);

