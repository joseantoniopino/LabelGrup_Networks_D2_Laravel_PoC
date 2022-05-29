<?php

namespace Database\Seeders;

use Domain\Users\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@mail.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $moderator = User::create([
            'name' => 'moderator',
            'email' => 'moderator@mail.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $seller = User::create([
            'name' => 'seller',
            'email' => 'seller@mail.test',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin');
        $moderator->assignRole('moderator');
        $seller->assignRole('seller');
    }
}
