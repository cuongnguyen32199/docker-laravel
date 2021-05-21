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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $password = Hash::make('password');
        $now = date('Y-m-d H:i:s');

        User::create([
            'name' => 'Nguyễn Mạnh Cường',
            'email' => 'cuongnm4215@gmail.com',
            'password' => $password,
        ]);

        $faker = Factory::create();

        $users = [];
        for ($i = 0; $i < 50000; $i++) {
            $users[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $password,
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }

        $chunks = array_chunk($users, 10000);
        foreach ($chunks as $chunk) {
            User::insert($chunk);
        }
    }
}
