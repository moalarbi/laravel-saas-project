<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Plan;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Roles
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($adminRole);

        // Create Regular User
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole($userRole);

        // Create Plans
        Plan::create([
            'name' => 'Basic Plan',
            'slug' => 'basic-plan',
            'stripe_plan' => 'price_basic_id',
            'price' => 10,
            'description' => 'Basic features for individuals',
        ]);

        Plan::create([
            'name' => 'Premium Plan',
            'slug' => 'premium-plan',
            'stripe_plan' => 'price_premium_id',
            'price' => 29,
            'description' => 'Advanced features for professionals',
        ]);
    }
}
