<?php

namespace App\Livewire\FeatureSuggestion;

use Livewire\Component;
use App\Models\FeatureSuggestion;
use Livewire\Attributes\Validate;
use Illuminate\Contracts\View\View;

class Create extends Component
{
 
    public string $name;
    public string $description;
    
    public function save():void 
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required|max:255',
          
        ]);

        $user = auth()->user();
        $featureSuggestion = $user->featureSuggestions()->create([
            'name' => $this->name,
            'description' => $this->description,
           
        ]);
  
        session()->flash('status', 'Feature suggestion successfully posted.');

        $this->reset('name', 'description');
    }
    

    public function render()
    {
        return view('livewire.feature-suggestion.create');
    }
}
