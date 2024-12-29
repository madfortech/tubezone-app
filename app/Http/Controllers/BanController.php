<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
Use App\Models\Post;
use App\Models\User;
use App\Models\Ban;

class BanController extends Controller
{
    public function index()
    {
        $reports = Ban::with('bannable')->get();
        return View::make('reports.index', ['reports' => $reports]);

    }

    public function store(Request $request)
    {
        $post = Post::find($request->input('id'));

        $ban = new Ban();
        $ban->bannable()->associate($post);
        $ban->createdBy()->associate(auth()->user());
        $ban->comment = $request->input('comment');
       

        $ban->save();

        return redirect()->back();

    }
}
