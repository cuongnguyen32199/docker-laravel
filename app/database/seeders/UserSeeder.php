<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        set_time_limit(3600); // Inscrese script timeout
        User::truncate();

//        User::factory()
//            ->count(10000) // Take 17,949.53ms
//            ->create();

        $users = [];
        $password = Hash::make('password');
        for ($i = 0; $i < 10000; $i++) {
            $users[] = [
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => $password,
            ];
        }

        User::insert($users); // Insert 10000 take 529.78ms
//        DB::table('users')->insert($users); // Insert 10000 take 553.78ms
    }
}
