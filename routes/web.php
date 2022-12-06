<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    $kategoriak = DB::select("SELECT * FROM kategoriak");
    return view('welcome',["kategoriak" => $kategoriak]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
