<?php

use App\Http\Controllers\Auth\Identity\IdentitySignInController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [UsersController::class, 'index'])->name('legacy.user.index');

Route::get("/simple-page", [SimpleController::class, "index"]);

Route::get("/identities-sign-in", [IdentitySignInController::class, "index"])->name("identities-sign-in");
Route::get("/identities/google-handle", [IdentitySignInController::class, "handleGoogleSignInRequest"])->name("identities-google-handle");
