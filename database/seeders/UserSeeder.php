<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = 'UnknownRori';
        User::create([
            'name' => $name,
            'password' => $name,
            'email' => 'unknownrori@mail.test',
            'admin' => 1
        ]);

        $name = 'rigit';
        User::create([
            'name' => $name,
            'password' => $name,
        ]);

        $name = 'pingkan';
        User::create([
            'name' => $name,
            'password' => $name,
        ]);

        $name = 'risti';
        User::create([
            'name' => $name,
            'password' => $name,
        ]);
    }
}
