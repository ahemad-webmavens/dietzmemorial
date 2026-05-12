<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'About',
                'slug' => 'about-us',
                'template' => 'about',
                'content' => '<p>The Dietz Memorial Company was founded in <strong>1903 in Waco, TX</strong>. Walter Dietz was the first Dietz to work for the company, initially called Gooch and Wells. Walter&#039;s goal was to serve the families of central Texas for their monument and memorialization needs.</p><p>Walter&#039;s strong sense of community allowed the company to gain a reputation for service and quality that set Dietz Memorial apart from all others. Later, Walter&#039;s son <strong>Henry</strong> joined his father in the business and carried on the tradition of service to the community.</p><p>Through additional store openings and acquisitions, Dietz Memorial currently operates <strong>4 retail stores and a manufacturing facility</strong> in Central Texas, along with over 15 additional outlets in the form of on-site partnerships with area funeral homes and cemeteries.</p><p>The company remains focused on what is important — <strong>excellence in service, quality and value.</strong></p>',
                'extra' => '{"eyebrow":"Our Story","hero_heading":"About Dietz Memorial","stats":[{"label":"Founded","value":"1903"},{"label":"Founder","value":"Walter Dietz"},{"label":"Retail Locations","value":"4+"},{"label":"Partner Outlets","value":"15+"}],"story_eyebrow":null,"story_heading":"A Century Of Service","accent_label":null,"accent_year":null,"cta_label":null,"cta_url":null,"values_eyebrow":null,"values_heading":"Our Commitment To You","values":[{"title":"Over 120 Years","body":"A century of craftsmanship and compassionate service to Central Texas families."},{"title":"Family Owned","body":"Still family-operated, carrying forward the same values Walter Dietz built in 1903."},{"title":"Central Texas Roots","body":"Serving Waco, New Braunfels, and surrounding communities with pride and dedication."}],"bottom_cta_eyebrow":null,"bottom_cta_heading":null,"bottom_cta_primary_label":null,"bottom_cta_primary_url":null,"bottom_cta_secondary_label":null,"bottom_cta_secondary_url":null}',
                'meta_title' => NULL,
                'meta_description' => NULL,
                'hero_image' => 'pages/01KR3R0F24MTRQF4BQS9Z3CMBG.webp',
                'is_active' => 1,
                'created_at' => '2026-05-05 12:20:22',
                'updated_at' => '2026-05-12 11:15:46',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'Home',
                'slug' => 'home',
                'template' => 'default',
                'content' => '<p></p>',
                'extra' => '[]',
                'meta_title' => 'home meta',
                'meta_description' => 'home description',
                'hero_image' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-06 11:23:37',
                'updated_at' => '2026-05-12 12:43:14',
            ),
            2 => 
            array (
                'id' => 6,
                'title' => 'Memorial Design',
                'slug' => 'memorial-design-guide',
                'template' => 'memorial_guide',
                'content' => '<p>Granite is one of earth’s natural resources found in granite quarries throughout the world. Each quarry is unique in the granite found within it. Color and pattern vary at each quarry based on soil, mineral and water content from the region. Granite is mined from quarries in large cut blocks and moved to the manufacturing facility. From here, the granite block is sawed into slabs, which are cut to size, polished and shaped based on the requirements of our customers.
In order to customize each memorial, the engraving process is then performed. Engraving typically involves using a rubber stencil cut from the design selected by the customer. Then, artisans use a sandblasting technique to carve out the design left “open” by the stencil. The dwell time and angle of the sandblasting tool determines how each letter or emblem is created adding depth and character to each monument. For example, Shape carving gives monuments a 3-dimensional look to flowers or other designs by sandblasting deeper in some areas and more shallow in others. Lithochrome paint is then typically applied to the sandblasted areas to finish the lettering process.</p>',
                'extra' => '[]',
                'meta_title' => NULL,
                'meta_description' => NULL,
                'hero_image' => 'pages/01KR32ZBGHVQH5R5W5XJA76KZ3.webp',
                'is_active' => 1,
                'created_at' => '2026-05-06 12:42:28',
                'updated_at' => '2026-05-08 13:37:20',
            ),
            3 => 
            array (
                'id' => 7,
                'title' => 'services',
                'slug' => 'services',
                'template' => 'services',
                'content' => '<p></p>',
                'extra' => '{"eyebrow":"What We Offer","hero_heading":"Our Services","hero_subtext":"Crafting meaningful tributes with care and compassion for over 120 years.","bottom_cta_eyebrow":"Need Guidance?","bottom_cta_heading":"We\'re Here to Help","bottom_cta_body":"Our team is available to answer any questions and guide you through the memorial process.","bottom_cta_label":null,"bottom_cta_url":null}',
                'meta_title' => 'Our Services',
                'meta_description' => 'Explore our full range of memorial services including granite, bronze, mausoleums, pet memorials and more.',
                'hero_image' => 'pages/01KRE0NAWJRFJQ07A6JSRXB933.jpg',
                'is_active' => 1,
                'created_at' => '2026-05-11 10:36:17',
                'updated_at' => '2026-05-12 11:56:15',
            ),
            4 => 
            array (
                'id' => 8,
                'title' => 'Blog',
                'slug' => 'blog',
                'template' => 'default',
                'content' => '<p></p>',
                'extra' => '[]',
                'meta_title' => 'Blog Title',
                'meta_description' => 'Blog Description',
                'hero_image' => NULL,
                'is_active' => 1,
                'created_at' => '2026-05-11 10:41:20',
                'updated_at' => '2026-05-11 10:41:20',
            ),
            5 => 
            array (
                'id' => 9,
                'title' => 'Locations',
                'slug' => 'locations',
                'template' => 'locations',
                'content' => '<p></p>',
                'extra' => '{"eyebrow":"Find Uss","hero_heading":"Our Locations","hero_subtext":"Serving Central Texas with two convenient locations \\u2014 come visit us today.","bottom_cta_eyebrow":"Get In Touch","bottom_cta_heading":"Not Sure Which Location to Visit?","bottom_cta_body":"Our team is happy to help you find the right location and guide you through the process.","bottom_cta_label":"Contact Us","bottom_cta_url":null}',
                'meta_title' => 'locations title',
                'meta_description' => 'locations description',
                'hero_image' => 'pages/01KRE1PNAV9057WNHBQA4H6XF8.jpg',
                'is_active' => 1,
                'created_at' => '2026-05-11 10:42:01',
                'updated_at' => '2026-05-12 12:13:54',
            ),
            6 => 
            array (
                'id' => 10,
                'title' => 'Gallery',
                'slug' => 'gallery',
                'template' => 'gallery',
                'content' => '<p></p>',
                'extra' => '{"eyebrow":" Our Work","hero_heading":"Memorial Gallery","hero_subtext":"Browse our collection of handcrafted memorials \\u2014 each one a unique tribute to a life well lived."}',
                'meta_title' => 'gallery title ',
                'meta_description' => 'gallery description',
                'hero_image' => 'pages/01KRE19SYCHBGESFH413JZFGFW.jpg',
                'is_active' => 1,
                'created_at' => '2026-05-11 10:43:16',
                'updated_at' => '2026-05-12 12:06:32',
            ),
            7 => 
            array (
                'id' => 11,
                'title' => 'contact',
                'slug' => 'contact',
                'template' => 'contact',
                'content' => '<p></p>',
                'extra' => '{"hero_heading":"Contact Us","hero_subtext":"We\'re here to help guide you through the memorial process with compassion and care.","waco_heading":"Waco \\u2014 Headquarters","waco_hours":" Mon\\u2013Fri: 9:00 AM \\u2013 5:00 PM","waco_address":" 500 LaSalle Ave","waco_city_state_zip":"Waco, TX 76706","nb_heading":"New Braunfels","nb_address":"628 S. Business IH 35","nb_city_state_zip":"New Braunfels, TX 78130","trust_label":"Family-Owned Since 1903","trust_body":"Proudly serving Waco, New Braunfels, and all of Central Texas for over 120 years."}',
                'meta_title' => 'contact title ',
                'meta_description' => 'contact description',
                'hero_image' => 'pages/01KRE2MZ6RJEK7YB9DZMXN85SR.jpg',
                'is_active' => 1,
                'created_at' => '2026-05-11 10:43:43',
                'updated_at' => '2026-05-12 12:30:07',
            ),
        ));
        
        
    }
}