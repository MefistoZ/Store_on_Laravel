<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
          'name' => 'Администратор',
          'email' => 'admin@example.com',
          'password' => bcrypt('admin'),
          'is_admin' => 1,
        ];
        DB::table('users')->insert($users);
    }
}
