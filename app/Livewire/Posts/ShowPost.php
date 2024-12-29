<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class ShowPost extends Component
{
    public Post $post;
  
    public function mount($postId)
    {
        $this->post = Post::find($postId);
        $this->post->trackIpAddress();
        $this->post->incrementReadCount();
    }

    public function delete($postId): void
    {
        $post = Post::findOrFail($postId);
        $post->delete();
        $this->redirect('/posts');
        
    }

    public function render()
    {
        return view('livewire.posts.show-post',[
            'post' => Auth::user()->post,
        ]);
    }
}
