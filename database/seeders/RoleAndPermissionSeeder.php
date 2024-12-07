<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('test1234'),
        ]);
        // Ruxsatlarni yaratish
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'delete recipes']);

        // Rolni yaratish va ruxsatlarni biriktirish
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->givePermissionTo(['delete users', 'delete recipes']);

        $user=User::find(1);
        $user->assignRole('Admin');
    }
}
