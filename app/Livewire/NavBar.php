<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\ConstructionUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class NavBar extends Component
{
    public $unit_name = '4101';

    #[On('nombre-unidad')] 
    public function updateUnit($name)
    {
        $this->unit_name = $name;
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

        return view('components.nav-bar', compact('const_updates'));
    }
}
