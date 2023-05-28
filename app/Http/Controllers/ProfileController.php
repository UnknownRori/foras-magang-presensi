<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(): View
    {
        return view('dashboard.user.edit');
    }

    public function update(UpdateProfileRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (!Hash::check($validated['old-password'], auth()->user()->password))
            return redirect()->back()->with([
                'type' => 'error',
                'message' => 'Password lama tidak sesuai',
            ]);

        // Todo : Maybe extract this (?)
        unset($validated['old-password']);
        unset($validated['password_confirmation']);
        $user = $request->user()->fill($validated);
        $user->save();

        return redirect()->route('dashboard.main')->with([
            'type' => 'success',
            'message' => 'Profile berhasil diupdate',
        ]);
    }
}
