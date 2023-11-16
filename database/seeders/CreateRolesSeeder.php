<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Role::count() === 0) {
            $roles = [
                [
                    'name' => 'manager',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'admin',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'developer',
                    'guard_name' => 'web',
                ],
            ];
            foreach ($roles as $role) {
                Role::create($role);
            }
        }
    }
}
