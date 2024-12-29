<?php

namespace App\Livewire\Article;

use Livewire\Component;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
{
    #[Validate('required',message:'Title is required')] 
 
    public string $title = '';
    
    #[Validate('required',message:'Description is required')] 
    public string $description = '';

    public int $articleId;
    public ?Article $article;

    public function save(): void
    {
      
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        if (empty($this->article)) {
            Article::create([
                'title' => $this->title,
                'description' => $this->description,
            ]);
        } else {
            $this->article->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
        }

        session()->flash('status', 'Article successfully.');
        
        $this->reset('article', 'title', 'description');
    }


    public function render()
    {
        return view('livewire.article.create-article');
    }
}
