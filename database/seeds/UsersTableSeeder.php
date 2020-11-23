<?php

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'              => 'root',
            'email'             => 'root@gmail.com',
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
            'password'          => Hash::make('root'),
        ]);
    }
}
