<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Support\Facades\View;

class SearchController extends Controller
{
    public function show(Request $request)
    {
         
        $search = $request->input('search');

        $users = User::where('username', 'like', '%' . $search . '%')->get();
    
        $userDetails = [];
        foreach ($users as $user) {
            $userDetails[] = [
                'username' => $user->username,
                'email' => $user->email,
                'posts' => $user->posts()->where('title', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')->get(),
            ];
        }
    
        return View::make('search.result', compact('userDetails', 'search'));
    
    }
 
}
