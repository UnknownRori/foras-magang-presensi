<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class CheckInOutService
{
    /**
     * Register a checkin [`User`]
     *
     * @param \App\Models\User
     * @return void
     * @throws \Throwable
     */
    public function checkin(User $user)
    {
        DB::transaction(function () use ($user) {
            $time = now();

            $user->checkin()->create([
                'attendance' => $time,
                'attendance_time' => $time,
            ]);
        });
    }

    /**
     * Register a checkin [`User`]
     *
     * @param \App\Models\User
     * @return void
     * @throws \Throwable
     */
    public function checkout(User $user)
    {
        DB::transaction(function () use ($user) {
            $time = now();

            $user->checkin()->create([
                'attendance' => $time,
                'attendance_time' => $time,
            ]);
        });
    }
}
