<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Granite Memorials',
                'slug' => 'granite-memorials',
                'description' => 'Honor your loved one with a timeless granite memorial. We offer a wide selection of granite headstones, markers, and monuments in various styles, shapes, and colors. Each piece is crafted with precision and care at our Central Texas manufacturing facility — serving families since 1903.',
                'image' => 'services/01KR0PF9C3CVENDN59F19VSBJ0.webp',
                'meta_title' => 'Granite Memorials & Headstones in Waco TX - Dietz Memorial',
                'meta_description' => 'Custom granite headstones and monuments crafted in Central Texas. Upright, flat, bevel, and slant styles available. Serving Waco and New Braunfels since 1903.',
                'order' => 1,
                'is_active' => 1,
                'created_at' => '2026-05-05 09:32:00',
                'updated_at' => '2026-05-07 07:47:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Bronze Memorials',
                'slug' => 'bronze-memorials',
                'description' => 'Bronze markers offer a classic, elegant way to memorialize your loved one. Dietz Memorial provides custom bronze flat markers and plaques suitable for any cemetery. Durable, beautiful, and built to last generations.',
                'image' => 'services/01KR0PG1ZSP2HKCYYY38EPGTWR.webp',
                'meta_title' => 'Bronze Markers & Memorials in Waco TX - Dietz Memorial',
                'meta_description' => 'Custom bronze memorial markers and plaques for cemeteries across Central Texas. Quality craftsmanship from Dietz Memorial since 1903.',
                'order' => 2,
                'is_active' => 1,
                'created_at' => '2026-05-05 09:33:13',
                'updated_at' => '2026-05-07 07:47:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mausoleums & Columbaria',
                'slug' => 'mausoleums-columbaria',
                'description' => 'We design and install custom mausoleums and columbaria for families and cemeteries across Central Texas. Whether you need a private family mausoleum or a columbarium for cremated remains, our team delivers lasting craftsmanship with dignity and respect.',
                'image' => 'services/01KR0PGR0D0XT74JFB8ZM060YS.webp',
                'meta_title' => 'Mausoleums & Columbaria in Central Texas - Dietz Memorial',
                'meta_description' => 'Custom mausoleums and columbaria designed and installed by Dietz Memorial. Serving Waco, New Braunfels, and surrounding Central Texas communities.',
                'order' => 3,
                'is_active' => 1,
                'created_at' => '2026-05-05 09:34:07',
                'updated_at' => '2026-05-07 07:47:58',
            ),
        ));
        
        
    }
}