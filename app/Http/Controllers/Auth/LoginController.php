<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show login form
     */
    public function view(): View
    {
        return view('auth.login');
    }

    public function post(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated()))
            return redirect()->route('dashboard.main');

        return redirect()->route('login')->with([
            'type' => 'error',
            'message' => __('messages.login-failed'),
        ]);
    }
}
