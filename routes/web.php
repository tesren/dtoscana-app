<?php

use App\Livewire\HomePage;
use App\Livewire\UnitPage;
use App\Livewire\LoginPage;
use App\Livewire\SearchPage;
use App\Livewire\ContactPage;
use App\Livewire\PrivacyPage;
use App\Livewire\ProfilePage;
use App\Livewire\RegisterPage;
use App\Livewire\InventoryPage;
use App\Livewire\LifestylePage;
use App\Livewire\ResetPassword;
use App\Livewire\SavedUnitsPage;
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
    Route::get(Lang::uri('/estilo-de-vida'), LifestylePage::class)->name('lifestyle');
    Route::get(Lang::uri('/condominios-en-venta/torre-').'{name}', InventoryPage::class)->name('tower');
    Route::get(Lang::uri('/busqueda-de-condominios'), SearchPage::class)->name('search');
    Route::get(Lang::uri('/contacto'), ContactPage::class)->name('contact');
    Route::get(Lang::uri('/perfil'), ProfilePage::class)->name('profile');
    Route::get(Lang::uri('/politicas-privacidad'), PrivacyPage::class)->name('privacy');
    Route::get(Lang::uri('/unidades-guardadas'), SavedUnitsPage::class)->name('saved');
    Route::get(Lang::uri('/condominio-dtoscana').'/{tower_name}/{name}', UnitPage::class)->name('unit');

    Route::get(Lang::uri('/inicia-sesion'), LoginPage::class)->name('login');
    Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');

    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

});

Route::get('/dtoscana-optimize', function() {

    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:cache');

    return ('Optimizado');
});

