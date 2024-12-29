<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordUpdated;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('auth.passwords.edit');
    }

    public function update(UpdatePasswordRequest $request)
    {
        auth()->user()->update($request->validated());

        auth()->user()->update(['password' => Hash::make($request->validated()['password'])]);
        auth()->user()->notify(new PasswordUpdated());
        return redirect()
        ->route('profile.password.edit')
        ->with('message', __('Password update successfuly'));
    }
}
