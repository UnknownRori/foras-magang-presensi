<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
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
            'role' => RoleEnum::Admin->name,
        ]);

        $name = 'rigit';
        User::create([
            'name' => $name,
            'password' => $name,
            'role' => RoleEnum::Magang->name,
        ]);

        $name = 'pingkan';
        User::create([
            'name' => $name,
            'password' => $name,
            'role' => RoleEnum::Magang->name,
        ]);

        $name = 'risti';
        User::create([
            'name' => $name,
            'password' => $name,
            'role' => RoleEnum::Magang->name,
        ]);
    }
}
