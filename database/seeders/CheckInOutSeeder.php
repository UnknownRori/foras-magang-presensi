<?php

namespace Database\Seeders;

use App\Models\CheckIn;
use App\Models\CheckOut;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CheckInOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create();

        for ($i = 0; $i < 10; $i++) {
            CheckIn::factory()->for($user)->create(['attendance' => now()->day(-$i)]);
            CheckOut::factory()->for($user)->create(['attendance' => now()->day(-$i)]);
        }

        $checkin = new CheckIn();
        $checkin->attendance = now()->day(-20);
        $checkin->attendance_time = now()->day(-20);
        $checkin->user_id = $user->id;
        $checkin->save();

        $checkout = new CheckOut();
        $checkout->attendance = now()->day(-20);
        $checkout->attendance_time = now()->day(-20);
        $checkout->user_id = $user->id;
        $checkout->save();
    }
}
