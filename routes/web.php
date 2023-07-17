<?php

use App\Http\Composers\HelloComposer;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ChatUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RestappController;
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

Route::get('person/add', [PersonController::class, 'add']);
Route::post('person/add', [PersonController::class, 'create']);

Route::get('person/edit', [PersonController::class, 'edit']);
Route::post('person/edit', [PersonController::class, 'update']);

Route::get('person/delete', [PersonController::class, 'delete']);
Route::post('person/remove', [PersonController::class, 'remove']);

Route::get('board', [BoardController::class, 'index']);
Route::get('board/add', [BoardController::class, 'add']);
Route::post('board/add', [BoardController::class, 'create']);
Route::get('board', [BoardController::class, 'index']);

Route::resource('rest', RestappController::class);

Route::get('hello/rest', [HelloController::class, 'rest']);

require __DIR__.'/auth.php';
