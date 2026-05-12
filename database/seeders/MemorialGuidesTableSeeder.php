<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MemorialGuidesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('memorial_guides')->delete();
        
        \DB::table('memorial_guides')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Style',
                'slug' => 'style',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Granite Memorial Design - Style</h2>
<p>The first step in designing a monument is to consider the style to be used. Monuments are available in many different styles, however, there exist several standard styles as outlined below. The sides and top of a monument can be shaped in different ways to create unique pieces that allow for personal creativity. Custom styles are also available and your imagination is your only limit. Be sure to visit our gallery to see some of the unique styles that our customers have worked with our design professionals to create! <br><br><img src="/storage/JFSXHHKx5W2lEp2gcMhGwG5ngSbCIw8ltpiR2dJ2.jpg" alt="style images" data-id="JFSXHHKx5W2lEp2gcMhGwG5ngSbCIw8ltpiR2dJ2.jpg"></p>',
                'featured_image' => 'guides/01KR2Y067Z8HCEKEKC579V1G6E.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:29:14',
                'updated_at' => '2026-05-08 09:41:46',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Shape',
                'slug' => 'shape',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Granite Memorial Design - Shape</h2>

<p class="text-gray-600 leading-relaxed mb-6">After the style of monument has been determined, the monument\'s many shapes must be considered. Choosing the shape of a top, corners, and bases adds uniqueness and elegance to the overall design of the stone. Different shapes allow for customization that can change the overall look and provides customers the chance to truly create a monument that will stand apart. Below are examples of the types of shape choices that must be made when considering the total design.</p>

<div class="flex flex-wrap gap-4 mb-10 text-sm md:text-base">
    <a href="#tops" class="text-[#4a5e3a] hover:underline">Tops</a>
    <a href="#bases" class="text-[#4a5e3a] hover:underline">Bases</a>
    <a href="#corners" class="text-[#4a5e3a] hover:underline">Corners</a>
    <a href="#ends" class="text-[#4a5e3a] hover:underline">Ends</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2 gap-8 mb-12">
    <div id="tops" class="scroll-mt-32">
        <h3 class="text-xl font-light text-[#2f3d24] mb-4 pb-3 border-b border-gray-200">
            Tops
        </h3>
        <div class="space-y-6">
            <div class="text-center">
                <img src="/storage/tops.jpg"
                     class="mx-auto  w-full object-contain">
            </div>
        </div>
    </div>

    <div id="bases" class="scroll-mt-32">
        <h3 class="text-xl font-light text-[#2f3d24] mb-4 pb-3 border-b border-gray-200">
            Bases
        </h3>
        <div class="space-y-6">
            <div class="text-center">
                <img src="/storage/bases.jpg"
                     class="mx-auto w-full object-contain">
            </div>
        </div>
    </div>
    <div id="corners" class="scroll-mt-32">
        <h3 class="text-xl font-light text-[#2f3d24] mb-4 pb-3 border-b border-gray-200">
            Corners
        </h3>
        <div class="space-y-6">
            <div class="text-center">
                <img src="/storage/corners.jpg"
                     class="mx-auto w-full object-contain">
            </div>
        </div>
    </div>
    <div id="ends" class="scroll-mt-32">
        <h3 class="text-xl font-light text-[#2f3d24] mb-4 pb-3 border-b border-gray-200">
            Ends
        </h3>
        <div class="space-y-6">
            <div class="text-center">
                <img src="/storage/ends.jpg"
                     class="mx-auto w-full object-contain">
            </div>
        </div>
    </div>

</div>',
                'featured_image' => 'guides/01KR2Y0TWW0T5SERGRJWFM881K.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:29:27',
                'updated_at' => '2026-05-12 09:22:26',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Design',
                'slug' => 'design',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Granite Memorial Design - Design</h2><p>The next step is to determine which design you prefer. If the monument will be a companion or family monument, how will the family name be engraved? There is the option to use a panel or books or scrolls to highlight areas where names and dates will be captured. Panels are frosted or roughed up areas where there is no polish that serve to highlight the names being engraved. Below are several examples of how the design can be created for your monument. Once this decision is made, you can now use engraving to personalize the monument.</p>',
                'featured_image' => 'guides/01KR2Y1HHF357ZC91EQTEEGXF9.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:29:40',
                'updated_at' => '2026-05-08 09:42:16',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Personalization',
                'slug' => 'personalization',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Granite Memorial Design - Personalization</h1><p>Now that the monument has a style and basic design, there are several methods with which to personalize it. Many people choose to have phrases, poems or sayings that were personal to them. You can also choose from our vast library of emblems and designs or have Dietz Memorial create your own emblem to be engraved on the monument. Emblems can be religious, civic group, or custom in nature. The Masonic symbol, a specific cross, hunting and fishing themes are all examples of emblems that are available as standard offerings from Dietz Memorial. Again, if there is something specific and unique that you would like designed, our in-house creative staff can make it happen.<br><br>
<h3 class="text-md font-semibold text-black mb-6">Example of some of our cross emblems </h3> 
<img src="/storage/Personalization2.jpg" alt="personalization images"></p>',
                'featured_image' => 'guides/01KR2Y26NGHBG6R1F9412CDTC0.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:29:54',
                'updated_at' => '2026-05-08 09:41:17',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Terms & Definitions',
                'slug' => 'terms-definitions',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Terms and Definitions</h2>
<ul>
<li><p><strong>Flat Marker</strong> - A marker / memorial that lies flush to the ground and can be either a single or companion piece.</p></li>
<li><p><strong>Bevel</strong> - A marker / memorial similar to a flat but rises in the back and is taller creating an angled engraving and personalization area. Single or companion.</p></li>
<li><p><strong>Slant Marker</strong> - A marker / memorial that is wide at the bottom and tapers to the top with a straight back creating an angled area for engraving and personalization. Single or companion.</p></li>
<li><p><strong>Upright Die</strong> - A marker / memorial that is upright and has a front and back for engraving and personalization. Upright die can be vertical or horizontal. Single, companion or family.</p></li>
<li><p><strong>Base</strong> - Any piece of granite that a marker sits on to add height and a look of presentation of the piece it supports. Bases typically sit on a foundation or on the ground.</p></li>
</ul>',
                'featured_image' => 'guides/01KR2Y2WHPAXAGWS2S37BR5W6D.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:30:39',
                'updated_at' => '2026-05-12 09:19:34',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Cemetery Regulations',
                'slug' => 'cemetery-regulations',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Cemetery Regulations</h2><p>Before designing a monument that is right for you or your loved one, it is always important to understand what regulations exist for the section of the cemetery in which the monument will be located. For example, many cemeteries have flat or bronze only sections where upright monuments cannot be erected. Still others require upright monuments to be of a certain height or thickness. Understanding cemetery regulations will help in determining the best style for you and simplify the entire design process. There are several ways to acquire this information. In most cases, your cemetery will have the regulations posted in the cemetery, at the office, or on signs throughout the cemetery. If you are unable to find the regulations this way, contact your township office, city office, or church and ask them to send you the regulations. Our staff can assist you in collecting and understanding the requirements for your cemetery if necessary.</p>',
                'featured_image' => 'guides/01KR2Y3HMEKXD0KP6TG127Z1TE.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:30:51',
                'updated_at' => '2026-05-08 09:42:49',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Accessories',
                'slug' => 'accessories',
                'content' => '<h2 class="text-lg font-semibold text-black uppercase mb-6">Granite Memorial Design - Accessories</h2><p>A final option in the design of a monument is to add accessories. These can include custom bronze or bronze reliefs mounted to the granite, ceramic photographs, or vases for flowers. Adding accessories allows customers to put another personal touch to the monument and create tributes to loved ones.<br><br>
<img style="display:block;margin:0 auto" src="/storage/Accessories.jpg" alt="personalization images"></p>',
                'featured_image' => 'guides/01KR2YAWA13ZD2XZK0XEDCMQRT.jpg',
                'order' => 0,
                'is_active' => 1,
                'created_at' => '2026-05-08 04:43:03',
                'updated_at' => '2026-05-08 09:50:49',
            ),
        ));
        
        
    }
}