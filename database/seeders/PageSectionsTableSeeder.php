<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PageSectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('page_sections')->delete();
        
        \DB::table('page_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'page_id' => 5,
                'type' => 'hero',
                'content' => '{"heading":"Crafting Meaningful Memorials For Texas Families","since_year":"1903"}',
                'order' => 1,
                'is_active' => 1,
                'created_at' => '2026-05-07 05:34:37',
                'updated_at' => '2026-05-12 10:12:07',
            ),
            1 => 
            array (
                'id' => 2,
                'page_id' => 5,
                'type' => 'featured_services',
                'content' => '{"heading":"Crafted Memorials With Meaning"}',
                'order' => 2,
                'is_active' => 1,
                'created_at' => '2026-05-07 07:25:42',
                'updated_at' => '2026-05-12 10:16:28',
            ),
            2 => 
            array (
                'id' => 3,
                'page_id' => 5,
                'type' => 'story',
                'content' => '[]',
                'order' => 3,
                'is_active' => 1,
                'created_at' => '2026-05-07 09:18:29',
                'updated_at' => '2026-05-07 09:18:29',
            ),
            3 => 
            array (
                'id' => 4,
                'page_id' => 5,
                'type' => 'testimonials',
                'content' => '{"heading":"Trusted By Families Across Texas"}',
                'order' => 6,
                'is_active' => 1,
                'created_at' => '2026-05-07 09:53:06',
                'updated_at' => '2026-05-12 10:27:04',
            ),
            4 => 
            array (
                'id' => 5,
                'page_id' => 5,
                'type' => 'locations',
                'content' => '{"heading":"Proudly Serving Families Across Central Texas","subheading":"Visit one of our memorial locations to explore custom granite, bronze, cremation, and family memorial options with compassionate guidance."}',
                'order' => 5,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:24:58',
                'updated_at' => '2026-05-12 10:25:37',
            ),
            5 => 
            array (
                'id' => 6,
                'page_id' => 5,
                'type' => 'value_cta',
                'content' => '[]',
                'order' => 4,
                'is_active' => 1,
                'created_at' => '2026-05-07 10:39:02',
                'updated_at' => '2026-05-07 10:56:32',
            ),
        ));
        
        
    }
}