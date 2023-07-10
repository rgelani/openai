<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\TextToImageController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Welcome');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //chat 
    Route::get('/chat/{id?}', [ChatController::class, 'index'])->name('chat.show');
    Route::post('/chat/{id?}', [ChatController::class, 'chat'])->name('chat');
    Route::delete('/chat/{chat?}', [ChatController::class, 'destroy'])->name('chat.destroy');

    // generate text
    Route::get('/generate-text', function () {
        return Inertia::render('Tools/GenerateText');
    })->name('generate-text');

    // convert to image
    Route::get('/text-to-image', function () {
        return Inertia::render('Tools/TextToImage');
    })->name('text-to-image');
    Route::post('/text-to-image', [TextToImageController::class, 'generateImage'])->name('generate.image');
});

require __DIR__ . '/auth.php';
