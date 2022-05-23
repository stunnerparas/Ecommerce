<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
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
        User::create([
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

        User::factory(15)->create();
    }
}
