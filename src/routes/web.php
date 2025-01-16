<?php


use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;


Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('store');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
    Route::get('/search', [ContactController::class, 'search']);
    Route::post('/delete', [ContactController::class, 'destroy']);
    Route::post('/export', [ContactController::class, 'export']);
});