<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Term;
use App\Models\User;
use App\Http\Requests\StoreTermRequest;
use Illuminate\Support\Facades\DB;
use App\Notifications\TermUpdated;
use Illuminate\Support\Facades\Notification;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $termData = DB::table('terms')
            ->select('id','terms', 'created_at','updated_at')
            ->get();
        return View::make('admin.terms.index',compact('termData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return View::make('admin.terms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTermRequest $request): RedirectResponse
    {
        $termData = new Term;
 
        $termData->terms = $request->terms;
 
        $termData->save();
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new TermUpdated());
        }
        return redirect()->to('/terms/user/terms')
            ->with('success', 'Term was created successful!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $termData = Term::find($id);
        return View::make('admin.terms.edit',compact('termData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $termData = Term::find($id);
        $termData->terms = $request->terms;
        $termData->save();
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new TermUpdated());
        }
        return redirect()->back()->with('success', 'Term was created successful!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
