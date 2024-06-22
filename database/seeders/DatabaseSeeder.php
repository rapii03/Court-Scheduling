<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $days = ['senin', 'selasa', 'rabu', 'kamis', "jum'at"];
        $times = [
            '08.00-09.00',
            '09.00-10.00',
            '10.00-11.00',
            '11.00-12.00',
            '13.00-14.00',
            '14.00-15.00',
            '15.00-16.00',
            '16.00-17.00',
        ];

        foreach ($times as $num => $time) {
            foreach ($days as $day) {
                \App\Models\TimeList::create([
                    'number' => $num,
                    'time' => $time,
                    'day' => $day,
                ]);
            }
        }

        $user = \App\Models\User::create([
            'password' => 'admin321',
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'role' => 'lecture',
        ]);

        \App\Models\LectureData::create([
            'phone_number' => '0',
            'address' => '0',
            'nidn' => '0',
            'nip' => '0',
            'kk' => '0',

            'user_id' => $user->id,
        ]);
    }
}
