<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'gender' => 'Male',
            'password' => 'password',
        ]);

        Company::create([
            'logo' => '',
            'name' => 'Kanchan Cashmere',
            'email' => 'kanchan@cashmere.com.np',
            'phone' => '9809809800',
            'address' => 'Baneshwor, Kathmandu',
        ]);

        $this->call([
            PermissionSeeder::class,
        ]);

        // User::factory(15)->create();
        $role_admin = Role::create(['name' => 'super admin']);
        // assign roles and permissions
        $role_admin->givePermissionTo(Permission::all());
        $admin->assignRole($role_admin);

        // categories
        Category::insert([
            [
                'name' => 'Men',
                'order' => 1,
                'parent_id' => 0,
                'featured' => 'Yes',
                'slug' => 'men'
            ],
            [
                'name' => 'Women',
                'order' => 2,
                'parent_id' => 0,
                'featured' => 'Yes',
                'slug' => 'women'
            ],
        ]);
    }
}
