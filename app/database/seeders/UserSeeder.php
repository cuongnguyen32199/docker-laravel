<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;
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
        User::truncate();

//        User::factory()
//            ->count(10000) // Take 17,949.53ms
//            ->create();
        $password = Hash::make('password');

        User::create([
            'name' => 'Nguyễn Mạnh Cường',
            'email' => 'cuongnm4215@gmail.com',
            'password' => $password,
        ]);

        $faker = Factory::create();

        $users = [];
        for ($i = 0; $i < 20000; $i++) {
            $users[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $password,
            ];
        }

        User::insert($users); // Insert 10000 take 529.78ms
//        DB::table('users')->insert($users); // Insert 10000 take 553.78ms
    }
}
