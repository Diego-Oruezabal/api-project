<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'permissions.index',
            'permissions.show',
            'permissions.store',
            'permissions.update',
            'permissions.destroy',
            'roles.index',
            'roles.show',
            'roles.store',
            'roles.update',
            'roles.destroy',
        ];
        foreach ($permissions as $permission ){
          Permission::create([
                'name' => $permission,
                'guard_name' => 'api',
            ]);
        }
    }
}
