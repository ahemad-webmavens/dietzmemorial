<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GraniteColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('granite_colors')->delete();
        
        \DB::table('granite_colors')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'American Rose',
                'image' => 'granite-colors/01KR3J05BGFE5MAKTFB4Y0SVP9.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:26:43',
                'updated_at' => '2026-05-08 10:26:43',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'Blue Pearl',
                'image' => 'granite-colors/01KR3J155G3EQGTR0ZWPEKNEDJ.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:27:16',
                'updated_at' => '2026-05-08 10:27:16',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'Dakota Mahogany',
                'image' => 'granite-colors/01KR3J1N724ZQK29Z009PRX07Q.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:27:32',
                'updated_at' => '2026-05-08 10:27:32',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'Flash Black',
                'image' => 'granite-colors/01KR3J26FHJJ288REZZ3BGJJEM.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:27:50',
                'updated_at' => '2026-05-08 10:27:50',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'Georgia Gray',
                'image' => 'granite-colors/01KR3J2K50934SWKW1FR22XETZ.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:28:03',
                'updated_at' => '2026-05-08 10:28:03',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Jet Black',
                'image' => 'granite-colors/01KR3J32EE1HTA059YNNWJ5FRH.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:28:19',
                'updated_at' => '2026-05-08 10:28:19',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Mahogany',
                'image' => 'granite-colors/01KR3J3J9WA8RGGYJWRC25RA73.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:28:35',
                'updated_at' => '2026-05-08 10:28:35',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Missouri Red',
                'image' => 'granite-colors/01KR3J41H3SB88NYG7KTAAX62J.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:28:50',
                'updated_at' => '2026-05-08 10:28:50',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Platinum',
                'image' => 'granite-colors/01KR3J4JRM9660G5ZR7JEFEXVH.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:29:08',
                'updated_at' => '2026-05-08 10:29:08',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Premium Red',
                'image' => 'granite-colors/01KR3J50DBQF60C040WTDCRB03.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:29:22',
                'updated_at' => '2026-05-08 10:29:22',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Rosewood',
                'image' => 'granite-colors/01KR3J5HBMVDNAV7C5VQ4XK6JC.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:29:39',
                'updated_at' => '2026-05-08 10:29:39',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'White Marble',
                'image' => 'granite-colors/01KR3J61SXQ5YVX73H09HPWGM7.jpg',
                'description' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-08 10:29:56',
                'updated_at' => '2026-05-08 10:29:56',
            ),
        ));
        
        
    }
}