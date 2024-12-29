<?php

namespace App\Livewire\Article;

use Livewire\Component;
use App\Models\Article;

class ShowArticle extends Component
{
    public Article $article;
  
    public function mount($articleId)
    {
        $this->article = Article::find($articleId);
    }

    public function render()
    {
        return view('livewire.article.show-article');
    }
}
