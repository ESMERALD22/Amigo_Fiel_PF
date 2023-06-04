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
            'name' => 'Administrador Asociació Amigo Fiel' ,
            'email' => 'superUserAAFX@gmail.com',
            'password' => bCrypt('userSuperXelaAAF')
        ])->assignRole('Admin');
        

    }
}
