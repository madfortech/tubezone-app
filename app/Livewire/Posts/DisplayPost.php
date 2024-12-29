<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\Ban;

class DisplayPost extends Component
{
    public $bans;

    public function mount()
    {
        $this->bans = Ban::all();
    }



    public function render()
    {
        return view('livewire.posts.display-post',[
            'posts' => Post::latest()->get(),
            'bans' => $this->bans,

        ]);
    }
}
