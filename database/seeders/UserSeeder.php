<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdminUser();
        User::factory()->count(10)->create();
    }


    protected function createAdminUser()
    {
        $users = [
            [
                'name' => 'Andy',
                'email' => 'aliandac93@gmail.com',
                'password' => '1q2w3e4r',
                'remember_token' => Str::random(10),
            ]
        ];

        foreach ($users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'remember_token' => $user['remember_token'],
            ]);
        }

    }
}
