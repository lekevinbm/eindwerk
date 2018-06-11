<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        $roles = [
            ['name' => 'Administrator'],
            ['name' => 'User'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
