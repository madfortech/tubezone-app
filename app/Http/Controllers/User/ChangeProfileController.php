<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;

class ChangeProfileController extends Controller
{

    public function edit()
    {
        $user = auth()->user();
        return view('pop-up.profile.customization', compact('user'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = auth()->user();

          // Upload profile picture
        if ($request->hasFile('avatar')) {
            $user->addMedia($request->file('avatar'))
                ->toMediaCollection('avatars');
        }

        $user->update($request->validated());

        return redirect()
        ->route('user.home')
        ->with('message', __('Update profile'));
    }

}
