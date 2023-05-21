<?php

namespace App\Http\Controllers;

use App\Models\CheckIn;
use App\Http\Requests\StoreCheckInRequest;
use App\Http\Requests\UpdateCheckInRequest;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CheckInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.checkin.index', [
            'checkin' => CheckIn::with('user')->orderBy('attendance', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dashboard.checkin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckInRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $request->user()->checkin()->create();
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
    public function show(CheckIn $checkIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheckIn $checkIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckInRequest $request, CheckIn $checkIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CheckIn $checkIn)
    {
        //
    }
}
