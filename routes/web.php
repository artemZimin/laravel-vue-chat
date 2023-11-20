<?php

declare(strict_types=1);

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
    return \Inertia\Inertia::render('Chats');
});

Route::get('/register', function () {
    return \Inertia\Inertia::render('Register');
});

Route::get('/login', function () {
    return \Inertia\Inertia::render('Login');
});

Route::get('/chat/{id}', function () {
    return \Inertia\Inertia::render('Chat');
});

Route::get('/chats', function () {
    return \Inertia\Inertia::render('Chats');
});

Route::get('/profile/{id}', function () {
    return \Inertia\Inertia::render('Profile');
});
