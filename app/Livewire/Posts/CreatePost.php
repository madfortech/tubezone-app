<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\Category;
use Livewire\Attributes\Validate;
use Illuminate\Contracts\View\View;
use Livewire\WithFileUploads;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CreatePost extends Component

{
    use WithFileUploads;

    
    #[Validate('required',message:'Title is required')] 
    public string $title;

    #[Validate('required',message:'Video is required')] 
    public $video;

    #[Validate('required',message:'Description is required')] 
    public string $description;

    #[Validate('required',message:'Select your visibility is required')] 
    public string $visibility = 'public';

    #[Validate('required',message:'for kids,not for kids your visibility is required')] 
    public string $audience = 'for_kids';

    #[Validate('nullable')] 
    public string $restrictions;

    #[Validate('nullable')] 
    public string $tags;

    #[Validate('required|exists:categories,id')] 
    public int $category_id;

    public $categories;

    public $visibilityOptions = [
        'public' => 'Public',
        'private' => 'Private',
    ];

    public $audienceOptions = [
        'for_kids' => 'Kids',
        'not_for_kids' => 'Not for kids',
    ];
    
    public string $slug = '';

    public int $postId;
    public ?Post $post;

    public function updatedTitle($value): void
    {
        $this->slug = SlugService::createSlug(Post::class, 'slug', $this->title);
        
    }
    
    public function mount()
    {
        $this->categories = Category::all();
    }

    public function save() 
    {
        $validated = $this->validate();
        
        $user = auth()->user();

        $post = $user->posts()->create([
            'title' => $this->title,
            'slug' => $this->slug,
            'visibility' => $this->visibility,
            'audience' => $this->audience,
            'category_id' => $this->category_id,
            'tags' => $this->tags,
        ]);

        if ($this->video) {
            $post->addMedia($this->video->getRealPath())
            ->toMediaCollection('videos');
        }

        session()->flash('status', 'Post successfully updated.');

        return redirect()->to('/posts/create');
         
    }
    

    public function render()
    {
        return view('livewire.posts.create-post', ['categories' => Category::all()]);

    }
}
