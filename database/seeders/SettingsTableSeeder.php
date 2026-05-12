<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site_name',
                'value' => 'Dietz Memorial',
                'created_at' => '2026-05-06 09:38:26',
                'updated_at' => '2026-05-06 09:44:41',
            ),
            1 => 
            array (
                'id' => 3,
                'key' => 'phone',
                'value' => '254-756-5315',
                'created_at' => '2026-05-06 09:38:59',
                'updated_at' => '2026-05-06 09:38:59',
            ),
            2 => 
            array (
                'id' => 4,
                'key' => 'email',
                'value' => 'sales@dietzmemorial.com',
                'created_at' => '2026-05-06 09:39:29',
                'updated_at' => '2026-05-06 09:39:29',
            ),
            3 => 
            array (
                'id' => 5,
                'key' => 'waco_phone',
            'value' => '(254) 756-5315',
                'created_at' => '2026-05-06 09:59:33',
                'updated_at' => '2026-05-06 09:59:33',
            ),
            4 => 
            array (
                'id' => 6,
                'key' => 'nb_phone',
            'value' => '(830) 627-0261',
                'created_at' => '2026-05-06 10:00:00',
                'updated_at' => '2026-05-06 10:04:44',
            ),
            5 => 
            array (
                'id' => 7,
                'key' => 'logo',
                'value' => 'settings/01KQYDJH0SH5V63DAY67M28XG0.png',
                'created_at' => '2026-05-06 10:17:32',
                'updated_at' => '2026-05-06 10:33:10',
            ),
        ));
        
        
    }
}