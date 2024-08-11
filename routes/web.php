<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//view welcome page
Route::get('/', function () {
return view('index');
});

Route::get('login', [UserController:: class, 'loginPage'])->name('login'); //view login page
Route::post('login', [UserController:: class, 'loginPost'])->name('login-post'); //login post
Route::get('sign-up', [UserController:: class, 'signUpPage'])->name('sign-up'); //view sign up page
Route::post('sign-up', [UserController:: class, 'storeUserDetails'])->name('store-user-details.post'); //sign up post
Route::get('user.home', [UserController:: class, 'homePage'])->name('user.home'); //view sign up page
Route::post('/check-username-email', [UserController::class, 'checkUsernameEmail']); //check the username and email post

