<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Home',
                'url' => '/',
                'order' => 1,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:46:17',
                'updated_at' => '2026-05-06 10:46:17',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'About Us',
                'url' => '/about-us',
                'order' => 2,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:46:48',
                'updated_at' => '2026-05-06 12:10:51',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Services',
                'url' => '/services',
                'order' => 3,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:47:18',
                'updated_at' => '2026-05-06 10:47:18',
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'Memorial Design Guide',
                'url' => 'memorial-design-guide',
                'order' => 4,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:47:41',
                'updated_at' => '2026-05-08 05:31:45',
            ),
            4 => 
            array (
                'id' => 5,
                'label' => 'Gallery',
                'url' => '/gallery',
                'order' => 5,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:48:06',
                'updated_at' => '2026-05-06 10:48:06',
            ),
            5 => 
            array (
                'id' => 6,
                'label' => 'Locations',
                'url' => '/locations',
                'order' => 6,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:48:30',
                'updated_at' => '2026-05-06 10:48:30',
            ),
            6 => 
            array (
                'id' => 7,
                'label' => 'Blog',
                'url' => '/blog',
                'order' => 7,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:48:47',
                'updated_at' => '2026-05-06 10:49:15',
            ),
            7 => 
            array (
                'id' => 8,
                'label' => 'Contact',
                'url' => '/contact',
                'order' => 8,
                'is_active' => 1,
                'created_at' => '2026-05-06 10:49:01',
                'updated_at' => '2026-05-06 10:49:30',
            ),
        ));
        
        
    }
}