<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'editor']);

        $user = User::find(1); // Replace with actual user ID
        if ($user) {
            $user->assignRole('admin');
        }
    }
}
