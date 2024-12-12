<?php

namespace App\Livewire;

use App\Models\Tower;
use App\Models\Section;
use Livewire\Component;
use Illuminate\Support\Facades\Route;

class InventoryPage extends Component
{
    public Tower $tower;
    public $sections;
    public $route = '';

    public function mount($name)
    {
        $this->tower = Tower::where('name', $name)->firstOrFail();
        $this->sections = Section::where('tower_id', $this->tower->id)->get();
        $this->route = Route::currentRouteName();
        $this->dispatch('id-tower', id:$this->tower->id);
    }

    public function render()
    {
        return view('inventory-page');
    }
}
