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
            'password' => 'meida123',
            'email' => 'cahyo.untoro@if.itera.ac.id',
            'name' => 'Meida Cahyo Untoro',
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

        $user = \App\Models\User::create([
            'password' => 'ilham123',
            'email' => 'firman.ashari@if.itera.ac.id',
            'name' => 'Ilham Firman Ashari',
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

        $user = \App\Models\User::create([
            'password' => 'mugi123',
            'email' => 'mugi.praseptiawan@if.itera.ac.id',
            'name' => 'Mugi Praseptiawan',
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

        $user = \App\Models\User::create([
            'password' => 'andre123',
            'email' => 'andre.febrianto@if.itera.ac.id',
            'name' => 'Andre Febrianto',
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

        $user = \App\Models\User::create([
            'password' => 'radhinka123',
            'email' => 'radhinka.bagaskara@if.itera.ac.id',
            'name' => 'Radhinka Bagaskara',
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

        $user = \App\Models\User::create([
            'password' => 'miranti123',
            'email' => 'miranti.verdiana@if.itera.ac.id',
            'name' => 'Miranti Verdiana',
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

        $user = \App\Models\User::create([
            'password' => 'aidil123',
            'email' => 'aidil.afriansyah@if.itera.ac.id',
            'name' => 'Aidil Afriansyah',
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

        $user = \App\Models\User::create([
            'password' => 'eko123',
            'email' => 'eko.nugroho@if.itera.ac.id',
            'name' => 'Eko Nugroho',
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

        $user = \App\Models\User::create([
            'password' => 'andika123',
            'email' => 'andika.setiawan@if.itera.ac.id',
            'name' => 'Andika Setiawan',
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

        $user = \App\Models\User::create([
            'password' => 'winda123',
            'email' => 'winda.yulita@if.itera.ac.id',
            'name' => 'Winda Yulita',
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
