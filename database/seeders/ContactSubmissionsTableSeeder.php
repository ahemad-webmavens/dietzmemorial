<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSubmissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_submissions')->delete();
        
        \DB::table('contact_submissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location_id' => NULL,
                'name' => 'Ahemad Bakali',
                'email' => 'ahemadbakali26@gmail.com',
                'phone' => '09999999999',
                'message' => 'test data',
                'created_at' => '2026-05-06 07:13:10',
                'updated_at' => '2026-05-06 07:13:10',
            ),
            1 => 
            array (
                'id' => 2,
                'location_id' => NULL,
                'name' => 'Ahemad Bakali',
                'email' => 'ahemadbakali26@gmail.com',
                'phone' => '09999999999',
                'message' => 'test message',
                'created_at' => '2026-05-06 07:29:50',
                'updated_at' => '2026-05-06 07:29:50',
            ),
        ));
        
        
    }
}