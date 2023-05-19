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

        CheckIn::factory()->for($user)->create();
        CheckOut::factory()->for($user)->create();
    }
}
