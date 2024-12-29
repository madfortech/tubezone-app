<?php

namespace App\Livewire\Search;

use Livewire\Component;
use Illuminate\Contracts\View\View;
use App\Models\Post;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Str;

class Search extends Component
{
    
    public $searchQuery;
    public $results;
   
     
    public function search()
    {
        
        $this->results = Post::where('title', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('description', 'like', '%' . $this->searchQuery . '%')
            ->get();

        $users = User::where('username', 'like', '%' . $this->searchQuery . '%')->get();
        $articles = Article::where('title', 'like', '%' . $this->searchQuery . '%')->get();
        $tags = Tag::where('name', 'like', '%' . $this->searchQuery . '%')->get();

        $this->results = $this->results->merge($users);
        $this->results = $this->results->merge($articles);
        $this->results = $this->results->merge($tags);
    }
     
    private function searchPosts()
    {
        return Post::where('title', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('description', 'like', '%' . $this->searchQuery . '%')
            ->take(10)
            ->get();
    }
     
    private function searchUsers()
    {
        return User::where('username', 'like', '%' . $this->searchQuery . '%')
            ->take(10)
            ->get();
    }
    private function searchArticles()
    {
        return Article::where('title', 'like', '%' . $this->searchQuery . '%')
            ->orWhere('description', 'like', '%' . $this->searchQuery . '%')
            ->take(10)
            ->get();
    }

    private function searchTags()
    {
        return Tag::where('name', 'like', '%' . $this->searchQuery . '%')
            ->take(10)
            ->get();
    }

 

    public function render():View
    {
        return view('livewire.search.search');
    }
 
}
