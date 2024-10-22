<?php

namespace App\Livewire;

use App\Models\Unit;
use Livewire\Component;

class UnitPage extends Component
{

    public Unit $unit;

    public function mount($name)
    {
        $this->reset();
        $this->unit = Unit::where('name', $name)->firstOrFail();
        $this->dispatch('id-unidad', id:$this->unit->id);
    }

    public function saveUnit($unitID){

        $unit = Unit::findOrFail( $unitID );
        $unit->users()->attach( auth()->user()->id );
        $unit->save();

        session()->flash('saved', __('Se guardó la unidad ').$unit->name );
    }

    public function removeUnit($unitID){

        $unit = Unit::findOrFail( $unitID );
        $unit->users()->detach( auth()->user()->id );
        $unit->save();

        session()->flash('removed', __('Se quitó la unidad ').$unit->name);
    }

    public function render()
    {
        return view('unit-page');
    }
}
