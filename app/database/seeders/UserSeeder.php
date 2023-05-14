<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Esmeralda López' ,
            'email' => 'esmeralda@gmail.com',
            'password' => bCrypt('123456789')
        ])->assignRole('Admin');
        

    }
}
