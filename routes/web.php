<?php

use App\Http\Composers\HelloComposer;
use App\Http\Controllers\ChatUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PersonController;
use App\Http\Middleware\HelloMiddleWare;
use App\Models\ChatUser;

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

Route::get('/hello', [HelloController::class, 'index']);
Route::post('/hello', [HelloController::class, 'post']);

Route::get('/chatUser', [ChatUserController::class, 'index'])->name('chatUser.index');
Route::get('/chatUser/{id}', [ChatUserController::class, 'updateReadId']);

Route::get('/message/{id}', [MessageController::class, 'show']);

Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);

Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);

Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);

Route::get('hello/show',[HelloController::class, 'show']);

Route::get('/person', [PersonController::class, 'index']);

Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);

require __DIR__.'/auth.php';
