<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '123456789',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'administrator',
                'email' => 'administrator@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P5LdcFyP20Ref1iKYsBEO.bpwQZCdTneKQGSpl0vnSKSJd7VzJuTW',
                'remember_token' => 'rtgSyiSj3dwHikT8OYmnW5cffObuk3WUNwq5GdC6POtRY86MZQ92p9oAvHUV',
                'settings' => NULL,
                'created_at' => '2020-09-24 10:31:48',
                'updated_at' => '2020-09-24 10:31:48',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'depayadmin',
                'email' => 'depayadmin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GJ8eXcrFxiBF9C0A7NXDwuO69CtD4CcYfB8i4z9ancRvSICpqSfsa',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-09-25 08:37:42',
                'updated_at' => '2020-09-25 08:37:42',
            ),
        ));
        
        
    }
}