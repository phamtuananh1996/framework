<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create permissions
        Permission::create(['name' => 'USER_MANAGER']);
        Permission::create(['name' => 'CATEGORY_MANAGER']);
        Permission::create(['name' => 'NEWS_MANAGER']);
        Permission::create(['name' => 'SLIDE_MANAGER']);
        Permission::create(['name' => 'BILL_MANAGER']);
        Permission::create(['name' => 'PRODUCT_MANAGER']);
        Permission::create(['name' => 'ROLE_MANAGER']);
        Permission::create(['name' => 'PERMISSION_MANAGER']);
        Permission::create(['name' => 'LOGIN_ADMIN']);

        // create roles and assign created permissions

        $role = Role::create(['name' => 'MEMBER']);
        
        $role = Role::create(['name' => 'SUPER_ADMIN']);
        $role->givePermissionTo(['LOGIN_ADMIN','PERMISSION_MANAGER']);

        $users = App\Models\User::all();
        foreach ($users as $key => $user) {
            $user->assignRole('MEMBER');
        }
        $user = \App\Models\User::create([
            'name' => 'Super Admin',
            'email' => 'admin@gmail.com',
            'phone' => '0977601447',
            'address' => 'Hà Nội',
            'password' => '$2y$10$jxS6KiC3qdNgehENIOZXaOJeLbQvffSRTPeescYJDMuI2X51IeIXS', // 123456
            'remember_token' => str_random(10),
        ]);
        $user->assignRole('SUPER_ADMIN');
    }
}
