<?php

use App\Http\Controllers\api\SupportController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/supports', SupportController::class);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
