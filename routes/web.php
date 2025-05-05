<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php
Route::get('/home', [PageController::class, 'home']);
