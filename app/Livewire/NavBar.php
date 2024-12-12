<?php

namespace App\Livewire;

use App\Models\Unit;
use App\Models\Tower;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ConstructionUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


class NavBar extends Component
{
    public $unit_name = '4101';
    public $unit_tower = 'Siena';
    public $route = '';

    #[Url]
    public ?string $contact;

    #[On('id-unidad')] 
    public function updateUnit($id)
    {
        $unit = Unit::findOrFail($id);
        $this->unit_name = $unit->name;
        $this->unit_tower = $unit->section->tower->name;
    }

    public function mount()
    {
        $this->route = Route::currentRouteName();
        $this->contact = request()->query('contact');
    }

    public function logout(){
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        $const_updates = ConstructionUpdate::latest('date')->get();
        $towers = Tower::all();

        return view('components.nav-bar', compact('const_updates', 'towers'));
    }
}
