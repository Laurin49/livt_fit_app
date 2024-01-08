<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@hsv.de',
            'password' => Hash::make('hsv1887tv'),
            'is_admin' => true
        ]);
        \App\Models\User::create([
            'name' => 'S.Schonlau',
            'email' => 'schonlau@hsv.de',
            'password' => Hash::make('hsv1887tv'),
            'is_admin' => false
        ]);
        \App\Models\User::create([
            'name' => 'D.Welter',
            'email' => 'welter@diwe-dev.de',
            'password' => Hash::make('hsv1887tv'),
            'is_admin' => false
        ]);
    }
}
