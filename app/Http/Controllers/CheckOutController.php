<?php

namespace App\Http\Controllers;

use App\Models\CheckOut;
use App\Http\Requests\StoreCheckOutRequest;
use App\Http\Requests\UpdateCheckOutRequest;
use App\Services\CheckInOutService;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::allows('admin', auth()->user()))
            $checkout = CheckOut::with('user')->orderBy('attendance', 'desc')->paginate(10);
        else if (Gate::allows('non-admin', auth()->user()))
            $checkout = CheckOut::with('user')->where('user_id', auth()->user()->id)->orderBy('attendance', 'desc')->paginate(10);

        return view('dashboard.checkout.index', [
            'checkout' => $checkout,
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
    public function store(StoreCheckOutRequest $request, CheckInOutService $checkInOutService): RedirectResponse
    {
        try {
            $checkInOutService->checkout($request->user());
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
