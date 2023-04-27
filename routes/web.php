<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SzakdogaController;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get("/szakdogak", [SzakdogaController::class, "index"]);
Route::get("/szakdogak/{id}", [SzakdogaController::class, "show"]);
Route::post("/szakdogak", [SzakdogaController::class, "store"]);
Route::put("/szakdogak/{id}", [SzakdogaController::class, "update"]);
Route::delete("/szakdogak/{id}", [SzakdogaController::class, "destroy"]);



require __DIR__.'/auth.php';
