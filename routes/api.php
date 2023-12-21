<?php

use App\Http\Controllers\OrmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});






// /////////////////////////
//  ORM Route
Route::POST('/create-brand', [OrmController::class, 'OrmAction']); //Data Insert
Route::POST('/update-brand/{id}', [OrmController::class, 'OrmAction']); //Data Update 
Route::POST('/update-create-brand/{brandName}', [OrmController::class, 'OrmAction']); //Data UpdateOrInsert 
Route::POST('/update-create-brand/{brandName}', [OrmController::class, 'OrmAction']); //Data UpdateOrInsert 
Route::POST('/delete-brand/{id}', [OrmController::class, 'OrmAction']); //Data Delete
Route::get('/increment', [OrmController::class, 'OrmAction']); //Increment
Route::get('/decrement', [OrmController::class, 'OrmAction']) ;//Decrement
Route::get('/row', [OrmController::class, 'OrmAction']) ;// Retrieving List Of Column Values




