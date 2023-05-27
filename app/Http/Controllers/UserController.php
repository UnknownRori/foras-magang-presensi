<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        if ($validated['password'] != $validated['password_confirmation'])
            return redirect()->back()->with([
                'type' => 'error',
                'message' => 'Password konfirmasi tidak sama',
            ]);

        unset($validated['password_confirmation']);

        if (User::create($validated))
            return redirect()->route('dashboard.users.index')->with([
                'type' => 'success',
                'message' => 'User berhasil ditambah',
            ]);

        return redirect()->back()->with([
            'type' => 'error',
            'message' => 'User gagal ditambah',
        ]);
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
        return view('dashboard.user.edit', [
            'users' => User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Todo : Implement this
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->delete())
            return redirect()->route('dashboard.users.index')->with([
                'type' => 'success',
                'message' => 'User berhasil dihapus'
            ]);

        return redirect()->route('dashboard.users.index')->with([
            'type' => 'error',
            'message' => 'User gagal dihapus'
        ]);
    }
}
