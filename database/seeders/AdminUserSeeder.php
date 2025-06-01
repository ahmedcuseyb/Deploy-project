<?php
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'),
            ]
        );

        // Create 'admin' role if it doesn't exist
        Role::firstOrCreate(['name' => 'admin']);

        // Assign role to the user
        $admin->assignRole('admin');
    }
}
