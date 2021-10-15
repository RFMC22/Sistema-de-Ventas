<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);

        User::create([
            'name' => 'Renee Magallanes',
            'email' => 'rene@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('admin');

        User::factory(20)->create();
    }
}
