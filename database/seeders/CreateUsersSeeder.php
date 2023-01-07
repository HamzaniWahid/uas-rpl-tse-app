<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Hamzani',
               'email'=>'hamzani@gmail.com',
               'type'=>1,
               'password'=> bcrypt('zani'),
               'alamat'=> 'Embung Duduk',
            ],
            [
               'name'=>'Asri saomi',
               'email'=>'asrisaomi@gmail.com',
               'type'=>0,
               'password'=> bcrypt('zani'),
               'alamat'=> 'Embung Duduk',
            ],
            [
               'name'=>'Saomi Asri',
               'email'=>'saomiasri@gmail.com',
               'type'=>0,
               'password'=> bcrypt('zani'),
               'alamat'=> 'Embung Duduk',
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
