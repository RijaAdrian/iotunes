<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*
        for($i = 0; $i < 10; $i++) {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'firstname' => "Cloud$i",
                'lastname' => "Doe",
                'email' => "cloud$i@mail.com",
                'slug' => "cloud-$i",
                'username' => "Cloud $i",
                'country_id' => rand(1, 100),
                'password' => bcrypt('password')
            ]);
        }
        */
    }
}
