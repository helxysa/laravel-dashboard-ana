<?php

use App\Livewire\GestaoPessoas\Pessoas;
use App\Livewire\GestaoPessoas\VisaoGeral;
use App\Livewire\ContraCheque\ContraCheque;
use App\Livewire\GestaoPessoas\CategoriasMembros\Membros;
use App\Livewire\GestaoPessoas\CategoriasMembros\MembrosInativos;
use App\Livewire\GestaoPessoas\Colaboradores\Colaboradores;
use App\Livewire\GestaoPessoas\Estagiarios\Estagiarios;
use App\Livewire\GestaoPessoas\CategoriaServidores\Servidores;
use App\Livewire\GestaoPessoas\CategoriaServidores\ServidoresInativos;




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('pessoas');
})->name('home');


//Gestão de Pessoas
Route::get('/pessoas', Pessoas::class)->name('pessoas');
Route::get('/visao-geral', VisaoGeral::class)->name('visao-geral');
Route::get('/servidores', Servidores::class)->name('servidores');
Route::get('/membros', Membros::class)->name('membros');
Route::get('/colaboradores', Colaboradores::class)->name('colaboradores');
Route::get('/estagiarios', Estagiarios::class)->name('estagiarios');
Route::get('/membros-inativos', MembrosInativos::class)->name('membros-inativos');
Route::get('/servidores-inativos', ServidoresInativos::class)->name('servidores-inativos');



//Gestão de Unidade

//Contracheque
Route::get('/contra-cheque', ContraCheque::class)->name('contra-cheque');
