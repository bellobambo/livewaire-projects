<?php

namespace App\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropDown extends Component
{

    public $continents = [];
    public $countries = [];
    public $selectedContinent = [];

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-drop-down');
    }

    public function changeContinent()
    {
        if ($this->selectedContinent !== '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
