<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'staff'],
            ['name' => 'hotel'],
            ['name' => 'user'],

        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
