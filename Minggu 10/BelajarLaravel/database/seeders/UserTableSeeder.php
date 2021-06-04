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
            'name' => 'Miftah Hozuki',
            'email' => 'miftahozuki@admin.com',
            'password' => bcrypt('#Qwerty22'),
        ]);
    }
}
