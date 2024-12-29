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

    #[Validate('required')] 
    public string $restrictions;

    #[Validate('nullable')] 
    public string $tags;

    #[Validate('required|exists:categories,id')] 
    public int $category_id;

    public $categories;

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

    public function save():void 
    {
        $this->validate([
            'title' => 'required',
            'video' => 'required|mimes:mp4,mp3,avi|max:10240', // video field ko validate karna hoga
            'description' => 'required|max:255',
            'audience' => 'required|in:for_kids,not_for_kids',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'nullable',
        ]);
        
        $user = auth()->user();

        if ($this->audience == 'for_kids') {
            $this->audience = 'for_kids';
        } else {
            $this->audience = 'not_for_kids';
        }

        $post = $user->posts()->create([
            'title' => $this->title,
            'description' => $this->description,
            'slug' => $this->slug,
            'audience' => $this->audience,
            'category_id' => (int) $this->category_id,
            'tags' => $this->tags,
        ]);
 
       
        if (empty($this->post)) {
            $post->addMedia($this->video->getRealPath())->toMediaCollection('videos');
        } else {
            $this->post->clearMediaCollection('videos');
            $post->addMedia($this->video->getRealPath())->toMediaCollection('videos');
        }
 
        session()->flash('status', 'Post successfully updated.');

        $this->reset('title', 'description','audience','video','tags');
    }

    
    
    public function render()
    {
        return view('livewire.posts.create-post', ['categories' => Category::all()]);

    }
}
