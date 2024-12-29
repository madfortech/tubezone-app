<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;

class UpdatePost extends Component
{
    public Post $post;
  
    public $title = '';
 
  
    public $description = '';
    public $categories;
   
    public $audienceOptions = [
        'for_kids' => 'For Kids',
        'not_for_kids' => 'Not for kids',
    ];
    public $tags;
    public int $postId;
    public $audience;
    public $category_id;

    public function mount($postId)
    {
        $this->postId = $postId;
        $this->post = Post::find($postId);
        $this->title = $this->post->title;
        $this->description = $this->post->description;
        $this->categories = Category::all(); 
        $this->audience = $this->post->audience;
        $this->tags = $this->post->tags;
        $this->category_id = $this->post->category_id;
 
    }

    public function edit(int $postId): void
    {
        $this->post = Post::where('id', $postId)->first();
        $this->postId = $postId;
        
        $this->title = $this->post->title;
        $this->description = $this->post->description;
    }

    public function save():void
    {
        
        $this->post->update([
            'title' => $this->title,
            'description' => $this->description,
            'audience' => $this->audience,
            'category_id' => $this->category_id,
        ]);

        // Optional: Display a success message
        session()->flash('status', 'Post updated successfully.');
     
    }

    public function render()
    {
        return view('livewire.posts.update-post',[
            'categories' => $this->categories,
            'audienceOptions' => $this->audienceOptions,
        ]);
    }
}
