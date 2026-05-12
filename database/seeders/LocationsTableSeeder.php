<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('locations')->delete();
        
        \DB::table('locations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dietz Memorial - Waco',
                'slug' => 'waco',
                'address' => '500 LaSalle Ave',
                'city' => 'Waco',
                'state' => 'TX',
                'zip' => '76706',
                'phone' => '254-756-5315',
                'email' => 'sales@dietzmemorial.com',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3400.4353667192595!2d-97.1130952!3d31.539664400000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864f8215e664eca7%3A0x5577aef5a72162e6!2sDietz%20Memorial%20Co.!5e0!3m2!1sen!2sin!4v1778505897493!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'hours' => 'Mon-Fri 9:00 AM - 5:00 PM',
                'is_active' => 1,
                'created_at' => '2026-05-05 07:57:54',
                'updated_at' => '2026-05-11 13:25:18',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dietz Memorial - New Braunfels',
                'slug' => 'new-braunfels',
                'address' => '628 S. Business IH 35',
                'city' => 'New Braunfels',
                'state' => 'TX',
                'zip' => '78130',
            'phone' => '(830) 627-0261',
                'email' => 'dietznb@dietzmemorial.com',
                'map_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.9461355731946!2d-98.1224392!3d29.6923413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865cbd6f8f7fad7f%3A0x512db0954de03c94!2sDietz%20Memorial%20Co!5e0!3m2!1sen!2sin!4v1778505939722!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'hours' => 'Mon-Fri 9:00 AM - 5:00 PM',
                'is_active' => 1,
                'created_at' => '2026-05-07 11:03:39',
                'updated_at' => '2026-05-11 13:26:09',
            ),
        ));
        
        
    }
}