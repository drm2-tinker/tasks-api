<?php

use Illuminate\Database\Seeder;
use App\Models\Auth\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->email    = 'test@example.test';
        $user->password = bcrypt('Testing@123');

        $user->save();
    }
}
