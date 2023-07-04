<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	 User::create([
            'name' => 'Lalit',
            'email' => 'lj905936@gmail.com',
            'phone_number' => '9779868891417',
            'password' => bcrypt('password')
        ]);
    }
}
