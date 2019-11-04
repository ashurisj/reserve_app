<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Start using Faker
        $faker = Faker\Factory::create('ja_JP');

        //Create admin user
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'email_verified_at' => $faker->dateTime(),
            'password' => bcrypt('1234'),
            'remember_token' => $faker->dateTime(),
            'created_at' => $faker->dateTime(),
            'update_at' => $faker->dateTime(),
        ]);
    }
}
