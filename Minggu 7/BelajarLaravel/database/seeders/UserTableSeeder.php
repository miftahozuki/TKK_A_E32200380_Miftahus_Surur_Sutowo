<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::insert([
            'name' => 'admin',
            'email' => 'miftahozuki@admin.com',
            'password' => bcrypt(12345678),
        ]);
    }
}
