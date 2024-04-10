<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('leds')->insert([
            'led_is_on' => 0,
        ]);

        DB::table('counts')->insert([
            'times_pressed' => 0,
        
        ]);

        DB::table('time_columns')->insert([
            'tijd1' => '09:00',
            'tijd2' => '00:00',
            'tijd3' => '00:00',
        ]);

        DB::table('User')->insert([
            'user' => 'Lars',
            'password' => 'Larsislekker!'
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
