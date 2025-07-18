<?php

use App\Livewire\Dashboard;
use App\Livewire\VisaoGeral;
use App\Livewire\Contracheque;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layouts.app');
})->name('home');

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/contra-cheque', Contracheque::class)->name('contra-cheque');
Route::get('/visao-geral', Dashboard::class)->name('visao-geral');
