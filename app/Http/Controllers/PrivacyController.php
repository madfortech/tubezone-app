<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Term;
use Illuminate\Support\Facades\View;
use App\Http\Requests\StorePrivacyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacyData = DB::table('terms')
        ->select('id','privacy', 'created_at','updated_at')
        ->get();
        return View::make('admin.privacy.index',compact('privacyData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View::make('admin.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrivacyRequest $request): RedirectResponse
    {
        $privacyData = new Term;
 
        $privacyData->privacy = $request->privacy;
 
        $privacyData->save();

        return redirect()->to('/privacy')
            ->with('success', 'Privacy was created successful!');
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
        $privacyData = Term::find($id);
        if ($privacyData === null) {
            
            abort(404, 'Privacy not found');
        }
        return View::make('admin.privacy.edit',compact('privacyData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $term = Term::find($id);
        $term->privacy = $request->privacy;
        $term->save();
        return redirect()->back()->with('success', 'Privacy was created successful!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
