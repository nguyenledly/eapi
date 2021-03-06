<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $faker = Factory::create();
        $password = Hash::make('toptal');

        User::create([
            'name'=>'Admin',
            'email'=>'admin@localhost.com',
            'password'=>$password,
        ]);

        for ($i=0; $i < 10 ; $i++) { 
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$password,
            ]);
        }
    }
}
