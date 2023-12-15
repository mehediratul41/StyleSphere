<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User faker functions for fake data

        $faker = Faker::create();

        for($i=0;$i<=20;$i++){
        
        $user = new User;
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = $faker->password;
        $user->save();
           
        } 
        // $user = new User;

        // $user->name = "mehedi";
        // $user->email = "mehedi@gmail.com";
        // $user->password = "mrh";
        // $user->save();


    }
}
