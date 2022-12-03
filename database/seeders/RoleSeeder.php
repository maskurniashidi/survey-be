<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'Admin',
            'description' => 'Ini Role Admin'
        ]);
        Role::create([
            'role' => 'Tester',
            'description' => 'Ini Role Tester'
        ]);
        Role::create([
            'role' => 'Respondent',
            'description' => 'Ini Role Respondent'
        ]);
    }
}
