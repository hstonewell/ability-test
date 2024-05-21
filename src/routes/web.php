<?php


use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index'])->name('index');
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');
Route::post('/thanks', [ContactController::class, 'store'])->name('store');
Route::get('/thanks', [ContactController::class, 'thanks'])->name('thanks');

Route::get('/register', [AdminController::class, 'register']);
Route::post('/register', [AdminController::class, 'store']);

Route::get('/login', [AdminController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::post('/login', [AdminController::class, 'admin']);
//    Route::get('/admin', [AdminController::class, 'admin']);
});

//Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/search', [AdminController::class, 'search']);
Route::delete('/admin/delete', [AdminController::class, 'destroy']);