<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\RolesTableSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Akhil',
            'lastname' => 'Jain',
            'email' => 'admin@dine50.com',
            'role_id' => 1,
            'password' => bcrypt('akhil@123')
        ]);
    }
}
