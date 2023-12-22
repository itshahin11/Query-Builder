<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//__________________________________________
// Route Query_Builder StartHere
//__________________________________________

Route::get('/data', [DemoController::class, 'DemoAction']);
Route::get('/data2', [DemoController::class, 'DemoAction2']);


//__________________________________________
// Route Orm StartHere
//__________________________________________
//  ORM Route
Route::POST('/create-brand', [OrmController::class, 'OrmAction']); //Data Insert
Route::POST('/update-brand/{id}', [OrmController::class, 'OrmAction']); //Data Update 
Route::POST('/update-create-brand/{brandName}', [OrmController::class, 'OrmAction']); //Data UpdateOrInsert 
Route::POST('/update-create-brand/{brandName}', [OrmController::class, 'OrmAction']); //Data UpdateOrInsert 
Route::POST('/delete-brand/{id}', [OrmController::class, 'OrmAction']); //Data Delete
Route::get('/increment', [OrmController::class, 'OrmAction']); //Increment
Route::get('/decrement', [OrmController::class, 'OrmAction']) ;//Decrement
Route::get('/row', [OrmController::class, 'OrmAction']) ;// Retrieving All Rows & Retrieving single Row 
Route::get('/column', [OrmController::class, 'OrmAction']) ;// Retrieving List Of Column Values
Route::get('/agr', [OrmController::class, 'OrmAction']) ;// Aggregates
Route::get('/etc', [OrmController::class, 'OrmAction']) ;// Select Clause //Advance Clause // OrderBy // GroupBy // Limiting Skiping
Route::get('/page', [OrmController::class, 'OrmAction']) ; //Page


