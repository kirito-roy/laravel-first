<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Models\student;

Route::get('/', function () {
    // $user = student::all();
    // dd($user[1]->name);
    return view('home',['student' => student::all()]);
});
// routes/web.php
Route::get('/about', function () {
    return view('about', [
        'ab' => [
            ['id' => 1],
            ['id' => 2],
            ['id' => 3],
            ['id' => 4],
            ['id' => 5],
            ['id' => 6],
            ['id' => 7],
            ['id' => 8],
            ['id' => 9],
            ['id' => 10],
            ['id' => 11],
            ['id' => 12],
            ['id' => 13],
            ['id' => 14],
            ['id' => 15],
            ['id' => 16],
            ['id' => 17],
            ['id' => 18],
            ['id' => 19],
            ['id' => 20],
        ]     
    ]);
});
Route::get('/create', function () {
    return view('create');
});
Route::post('/create', function () {
    student::create([
        'name' => request('name'),
        'email' => request('email')
    ]);
    return view('create');
});
// Route::get('/about/{id}', function ($id) {
//     return view('about', ['id' => $id]);
// });
