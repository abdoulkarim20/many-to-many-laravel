<?php

use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

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

/**La configuration de la route pour le module formation*/
Route::prefix('formation')->group(function () {
    Route::get('/liste', [FormationController::class, 'liste'])->name('liste-formation');
    Route::get('/add', [FormationController::class, 'add'])->name('dd-formation');
});
