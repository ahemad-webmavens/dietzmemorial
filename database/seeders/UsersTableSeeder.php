<?php

namespace Database\Seeders;

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
                'name' => 'Ahemad',
                'email' => 'ahemadbakali26@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$BxIsWw0MlMjXyWYtnWewXu.B9GhupttG5gpOhrxh/iLxrvDqg2kT6',
                'remember_token' => NULL,
                'created_at' => '2026-05-05 05:53:31',
                'updated_at' => '2026-05-05 05:53:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Ahemad',
                'email' => 'ahemadraza887@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$O15SzWf/AUFSJe6.kTz/PucoAvxPs4oJnCw78Mi0XgZufQUxmr5D6',
                'remember_token' => '5VopB8dhM96f6gKkPbLBijK0mnLqczdXqsz0PkICU8ChZZs5nlROp1svv1bW',
                'created_at' => '2026-05-05 07:01:26',
                'updated_at' => '2026-05-05 07:01:26',
            ),
        ));
        
        
    }
}