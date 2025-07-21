<?php

use App\Livewire\Pessoas;
use App\Livewire\VisaoGeral;
use App\Livewire\ContraCheque;
use App\Livewire\Servidores;
use App\Livewire\Membros;
use App\Livewire\Colaboradores;
use App\Livewire\Teste;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pessoas');
})->name('home');


Route::get('/teste-livewire', Teste::class)->name('teste-livevire');
Route::get('/pessoas', Pessoas::class)->name('pessoas');
Route::get('/contra-cheque', ContraCheque::class)->name('contra-cheque');
Route::get('/visao-geral', VisaoGeral::class)->name('visao-geral');
Route::get('/servidores', Servidores::class)->name('servidores');
Route::get('/membros', Membros::class)->name('membros');
Route::get('/colaboradores', Colaboradores::class)->name('colaboradores');