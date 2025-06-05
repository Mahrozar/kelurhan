<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        AddAdminUserSeeder::run();
    }
}

class AddAdminUserSeeder
{
    public static function run()
    {
        if (!DB::table('users')->where('email', 'admin@kelurahan.local')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin',
                'email' => 'admin@kelurahan.local',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
