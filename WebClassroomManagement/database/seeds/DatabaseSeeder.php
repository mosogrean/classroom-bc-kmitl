<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\User::create([
           'personal_id' => 'admin1',
           'name' => 'admin',
           'tel' => '0000000000',
           'position' => 'admin',
           'email' => 'admin@admin.com',
            'password' => bcrypt('adminpw'),
            'is_admin' => true,
        ]);
    }
}
