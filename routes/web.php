<?php

use App\Livewire\HomePage;
use App\Livewire\UnitPage;
use App\Livewire\SearchPage;
use App\Livewire\ContactPage;
use App\Livewire\LifestylePage;
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

Route::localized(function () {

    Route::get('/', HomePage::class)->name('home');
    Route::get('/estilo-de-vida', LifestylePage::class)->name('lifestyle');
    Route::get('/condominios-en-venta', SearchPage::class)->name('search');
    Route::get('/contacto', ContactPage::class)->name('contact');
    Route::get('/condominio-dtoscana/{name}', UnitPage::class)->name('unit');

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

});