<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Alfredo Fernández',
        	'email' => 'alfredosiiilva@gmail.com',
        	'password' => bcrypt(123)
        ]);

        factory(App\User::class, 19)->create();
    }
}
