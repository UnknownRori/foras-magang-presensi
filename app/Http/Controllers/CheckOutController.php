<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use App\Http\Requests\StoreCheckOutRequest;
use App\Http\Requests\UpdateCheckOutRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.checkout.index', [
            'checkout' => CheckOut::with('user')->orderBy('attendance', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.checkout.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckOutRequest $request): RedirectResponse
    {
        try {
            DB::transaction(function () use ($request) {
                $request->user()->checkout()->create();
            });
        } catch (Exception $e) {
            return redirect()->back()->with([
                'type' => 'error',
                'message' => 'Presensi hanya bisa dilakukan sehari sekali...',
            ]);
        }

        return redirect()->route('dashboard.main')->with([
            'type' => 'success',
            'message' => 'Berhasil melakukan presensi',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(CheckOut $checkOut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckOut $checkOut)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckOutRequest $request, CheckOut $checkOut)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckOut $checkOut)
    {
        //
    }
}
