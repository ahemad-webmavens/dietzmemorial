<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSectionItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_section_items')->delete();
        
        \DB::table('page_section_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_section_id' => 1,
                'title' => NULL,
                'description' => 'Beautiful custom memorials crafted with care',
                'button_text' => 'View Services',
                'button_link' => '/services',
                'image' => 'sections/01KRAQMVZ8FARXJZSKS465DB5C.jpg',
                'order' => 1,
                'is_active' => 1,
                'created_at' => '2026-05-07 06:08:02',
                'updated_at' => '2026-05-12 10:00:53',
            ),
            1 => 
            array (
                'id' => 2,
                'page_section_id' => 1,
                'title' => NULL,
                'description' => 'Beautiful custom memorials crafted with care',
                'button_text' => 'View Services',
                'button_link' => '/services',
                'image' => 'sections/01KRAQKXEFEVX3A9ZW55M2Q2GJ.jpg',
                'order' => 2,
                'is_active' => 1,
                'created_at' => '2026-05-07 06:08:43',
                'updated_at' => '2026-05-12 10:01:16',
            ),
            2 => 
            array (
                'id' => 3,
                'page_section_id' => 1,
                'title' => NULL,
                'description' => 'Beautiful custom memorials crafted with care',
                'button_text' => 'View Services',
                'button_link' => '/services',
                'image' => 'sections/01KRAQQ625Q27Z77YAXTXH3Z8T.jpg',
                'order' => 3,
                'is_active' => 1,
                'created_at' => '2026-05-07 06:09:22',
                'updated_at' => '2026-05-12 10:01:27',
            ),
            3 => 
            array (
                'id' => 4,
                'page_section_id' => 1,
                'title' => NULL,
                'description' => 'Beautiful custom memorials crafted with care',
                'button_text' => 'View Services',
                'button_link' => '/services',
                'image' => 'sections/01KRAQRPR9FYFDCNYX6G4XAV1W.jpg',
                'order' => 4,
                'is_active' => 1,
                'created_at' => '2026-05-07 06:10:09',
                'updated_at' => '2026-05-12 10:01:37',
            ),
            4 => 
            array (
                'id' => 5,
                'page_section_id' => 1,
                'title' => NULL,
                'description' => 'Beautiful custom memorials crafted with care',
                'button_text' => 'View Services',
                'button_link' => '/services',
                'image' => 'sections/01KRAQG5P0NFG4HT2E9GV46HYR.jpg',
                'order' => 5,
                'is_active' => 1,
                'created_at' => '2026-05-07 06:10:47',
                'updated_at' => '2026-05-12 10:02:01',
            ),
            5 => 
            array (
                'id' => 6,
                'page_section_id' => 2,
                'title' => 'Granite Memorials',
                'description' => 'Custom granite memorials crafted with timeless beauty and care.',
                'button_text' => NULL,
                'button_link' => '/services/granite-memorials',
                'image' => 'sections/01KR0NP4Y2SX6GSVBZ462NTT1B.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 07:33:26',
                'updated_at' => '2026-05-07 09:24:48',
            ),
            6 => 
            array (
                'id' => 7,
                'page_section_id' => 2,
                'title' => 'Bronze Memorials',
                'description' => 'Custom Bronze Memorials crafted with timeless beauty and care.',
                'button_text' => NULL,
                'button_link' => '/services/bronze-memorials',
                'image' => 'sections/01KR0P4Y5CA89FMPWSM1K43S2F.webp',
                'order' => 2,
                'is_active' => 1,
                'created_at' => '2026-05-07 07:41:31',
                'updated_at' => '2026-05-07 07:41:31',
            ),
            7 => 
            array (
                'id' => 8,
                'page_section_id' => 2,
                'title' => 'Mausoleums & Columbaria',
                'description' => 'Custom Mausoleums & Columbaria crafted with timeless beauty and care.',
                'button_text' => NULL,
                'button_link' => '/services/mausoleums-columbaria',
                'image' => 'sections/01KR0P8WJRJ9AG3XBNPCWJBT30.webp',
                'order' => 3,
                'is_active' => 1,
                'created_at' => '2026-05-07 07:43:40',
                'updated_at' => '2026-05-07 07:43:40',
            ),
            8 => 
            array (
                'id' => 9,
                'page_section_id' => 3,
                'title' => 'Serving Families Since 1903',
                'description' => 'For more than a century, Dietz Memorial has helped families create meaningful memorials that honor loved ones with dignity, craftsmanship, and timeless beauty.',
                'button_text' => 'Learn Our Story',
                'button_link' => '/about-us',
                'image' => 'sections/01KR0W06RGCT1ZAVTJCATCRH7W.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 09:23:47',
                'updated_at' => '2026-05-07 09:24:35',
            ),
            9 => 
            array (
                'id' => 10,
                'page_section_id' => 4,
                'title' => 'Margaret Holloway ',
                'description' => 'Dietz Memorial helped us through one of the hardest times of our lives with such grace and patience. The headstone they created for my husband is absolutely beautiful. Every detail was perfect and exactly what we envisioned. I cannot thank their team enough.',
                'button_text' => NULL,
                'button_link' => NULL,
                'image' => 'sections/01KR0Y2EV10ZMNTJP67W4TRSR6.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 09:59:58',
                'updated_at' => '2026-05-12 10:45:50',
            ),
            10 => 
            array (
                'id' => 11,
                'page_section_id' => 4,
                'title' => ' Robert & Linda Castillo ',
                'description' => 'We visited several memorial companies before coming to Dietz and none of them came close to the level of care and craftsmanship we found here. They walked us through every option without any pressure and the finished granite marker exceeded every expectation. Truly a family we trust.',
                'button_text' => 'Sarah M.',
                'button_link' => NULL,
                'image' => 'sections/01KR0Y38YJGZZMG7GE9KDHFYZM.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:00:25',
                'updated_at' => '2026-05-12 10:43:57',
            ),
            11 => 
            array (
                'id' => 12,
                'page_section_id' => 4,
                'title' => 'James Pruitt',
                'description' => 'My father served in the Army for over 20 years and he deserved a memorial that honored that service. Dietz Memorial understood exactly what we wanted and delivered something we will be proud of for generations. The quality of the stone and engraving is outstanding.',
                'button_text' => NULL,
                'button_link' => NULL,
                'image' => 'sections/01KR0Y41G6QT4M14WPR0S7TRSX.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:00:50',
                'updated_at' => '2026-05-12 10:44:29',
            ),
            12 => 
            array (
                'id' => 13,
                'page_section_id' => 4,
                'title' => 'Susan Merriwether',
                'description' => 'From our first phone call to the final installation, the entire Dietz Memorial team was compassionate, professional, and incredibly detail oriented. They helped us create a memorial for our mother that truly reflects who she was. We are forever grateful.',
                'button_text' => NULL,
                'button_link' => NULL,
                'image' => 'sections/01KR0Y4WM90JT0YH2MZ76M4H8N.webp',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:01:18',
                'updated_at' => '2026-05-12 10:44:59',
            ),
            13 => 
            array (
                'id' => 14,
                'page_section_id' => 6,
                'title' => 'Shop Here Before You Pay Too Much',
                'description' => 'We provide beautiful handcrafted memorials with honest pricing, compassionate service, and generations of trusted craftsmanship.',
                'button_text' => 'Contact Us',
                'button_link' => '/contact',
                'image' => 'sections/01KR118RP37JEV1DJQNKM7DWBR.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:50:47',
                'updated_at' => '2026-05-07 10:55:50',
            ),
        ));
        
        
    }
}