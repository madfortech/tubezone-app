<?php

namespace App\Livewire\FeatureSuggestion;

use Livewire\Component;
use App\Models\FeatureSuggestion;

class ListSuggestion extends Component
{
    public function render()
    {
        return view('livewire.feature-suggestion.list-suggestion',[
            'featuresuggestion' => FeatureSuggestion::latest()->get()
        ]);
    }
}
