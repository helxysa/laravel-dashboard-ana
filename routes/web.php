<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;


Route::get('/dashboard', Dashboard::class);

Route::get('/', function () {
    return view('welcome');
});
