<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class ListPost extends Component
{
    public function render()
    {
        return view('livewire.posts.list-post',[
            'posts' => Post::latest()->get()
        ]);
    }
}
