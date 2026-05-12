<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleryItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gallery_items')->delete();
        
        \DB::table('gallery_items')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'Granite Headstones for Graves',
                'image' => 'gallery/01KR3MJVQTQWJQ9WGYXD7RFCY4.jpg',
                'category' => 'upright',
                'alt_text' => 'Granite Headstones for Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:11:53',
                'updated_at' => '2026-05-08 11:11:53',
            ),
            1 => 
            array (
                'id' => 6,
                'title' => 'Granite Memorial Stones',
                'image' => 'gallery/01KR3MX8GJ06MZ1VVGRVEPF5ER.jpg',
                'category' => 'bevel',
                'alt_text' => 'Granite Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:17:34',
                'updated_at' => '2026-05-08 11:17:34',
            ),
            2 => 
            array (
                'id' => 7,
                'title' => 'Granite Cemetery Headstones',
                'image' => 'gallery/01KR3MYNRG348HXQC4EY56W6TX.jpg',
                'category' => 'flat',
                'alt_text' => 'Granite Cemetery Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:18:20',
                'updated_at' => '2026-05-08 11:18:20',
            ),
            3 => 
            array (
                'id' => 8,
                'title' => 'Custom Granite Headstones',
                'image' => 'gallery/01KR3N000V8A2HDP71FNTQV1A4.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:19:03',
                'updated_at' => '2026-05-08 11:19:03',
            ),
            4 => 
            array (
                'id' => 9,
                'title' => 'Custom Headstones',
                'image' => 'gallery/01KR3N0VQ85JSKYN6TWF7T7M48.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:19:32',
                'updated_at' => '2026-05-08 11:19:32',
            ),
            5 => 
            array (
                'id' => 10,
                'title' => 'Personalized Memorial Stones',
                'image' => 'gallery/01KR3N1T1CM6Q0FM1S23ZY41A5.jpg',
                'category' => 'slant',
                'alt_text' => 'Personalized Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:20:03',
                'updated_at' => '2026-05-08 11:20:03',
            ),
            6 => 
            array (
                'id' => 11,
                'title' => 'Memorial Headstone',
                'image' => 'gallery/01KR3N2KEG4WZNTVGN891YK2PF.jpg',
                'category' => 'slant',
                'alt_text' => 'Memorial Headstone',
                'order' => 0,
                'created_at' => '2026-05-08 11:20:29',
                'updated_at' => '2026-05-08 11:20:29',
            ),
            7 => 
            array (
                'id' => 12,
                'title' => 'Memorial Plaques For Graves',
                'image' => 'gallery/01KR3N3GH5PWG64QAJA5V7AX2H.jpg',
                'category' => 'upright',
                'alt_text' => 'Memorial Plaques For Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:20:59',
                'updated_at' => '2026-05-08 11:20:59',
            ),
            8 => 
            array (
                'id' => 13,
                'title' => 'Cremation Headstones',
                'image' => 'gallery/01KR3N5Y0YZF2D4C4P7BFRAC2P.jpg',
                'category' => 'flat',
                'alt_text' => 'Cremation Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:22:18',
                'updated_at' => '2026-05-08 11:22:18',
            ),
            9 => 
            array (
                'id' => 14,
                'title' => 'Granite Headstones',
                'image' => 'gallery/01KR3N79ZHH7R1WZG2RQZRP2SE.jpg',
                'category' => 'bevel',
                'alt_text' => 'Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:23:03',
                'updated_at' => '2026-05-08 11:23:03',
            ),
            10 => 
            array (
                'id' => 15,
                'title' => 'Cremation Headstones',
                'image' => 'gallery/01KR3N8VQ2FNZS96WT535WDEM8.jpg',
                'category' => 'bevel',
                'alt_text' => 'Cremation Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:23:54',
                'updated_at' => '2026-05-08 11:23:54',
            ),
            11 => 
            array (
                'id' => 16,
                'title' => 'Headstones For Graves',
                'image' => 'gallery/01KR3N9Z346PVPFS4WNZMZSNM9.jpg',
                'category' => 'slant',
                'alt_text' => 'Headstones For Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:24:30',
                'updated_at' => '2026-05-08 11:24:30',
            ),
            12 => 
            array (
                'id' => 17,
                'title' => 'Affordable Granite Gravestones',
                'image' => 'gallery/01KR3NDZXRZ9KRTFE89GVX8B5K.jpg',
                'category' => 'upright',
                'alt_text' => 'Affordable Granite Gravestones',
                'order' => 0,
                'created_at' => '2026-05-08 11:26:42',
                'updated_at' => '2026-05-08 11:26:42',
            ),
            13 => 
            array (
                'id' => 18,
                'title' => 'Granite Gravestons',
                'image' => 'gallery/01KR3NFW62VBPSGZ86VRD834KK.jpg',
                'category' => 'flat',
                'alt_text' => 'Granite Gravestons',
                'order' => 0,
                'created_at' => '2026-05-08 11:27:44',
                'updated_at' => '2026-05-08 11:27:44',
            ),
            14 => 
            array (
                'id' => 19,
                'title' => 'Grave marker Design',
                'image' => 'gallery/01KR3NGFBEY99X0C0VY2EHEV3R.jpg',
                'category' => 'bevel',
                'alt_text' => 'Grave marker Design',
                'order' => 0,
                'created_at' => '2026-05-08 11:28:03',
                'updated_at' => '2026-05-08 11:28:03',
            ),
            15 => 
            array (
                'id' => 20,
                'title' => 'White Granite Headstones',
                'image' => 'gallery/01KR3NHDTYDGFFKHQAQNTM1VGX.jpg',
                'category' => 'bevel',
                'alt_text' => 'White Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:28:35',
                'updated_at' => '2026-05-08 11:28:35',
            ),
            16 => 
            array (
                'id' => 21,
                'title' => 'Custom Headstones Online',
                'image' => 'gallery/01KR3NJTBRFA6PNK5N2ZAKZX9V.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Headstones Online',
                'order' => 0,
                'created_at' => '2026-05-08 11:29:20',
                'updated_at' => '2026-05-08 11:29:20',
            ),
            17 => 
            array (
                'id' => 22,
                'title' => 'Memorial Granite',
                'image' => 'gallery/01KR3NKV41R70H76HK4K4XQ218.jpg',
                'category' => 'custom',
                'alt_text' => 'Memorial Granite',
                'order' => 0,
                'created_at' => '2026-05-08 11:29:54',
                'updated_at' => '2026-05-08 11:29:54',
            ),
            18 => 
            array (
                'id' => 23,
                'title' => 'Veterans Marker',
                'image' => 'gallery/01KR3NMPWCQX4PWGQFT40G3FYM.jpg',
                'category' => 'flat',
                'alt_text' => 'Veterans Marker',
                'order' => 0,
                'created_at' => '2026-05-08 11:30:22',
                'updated_at' => '2026-05-08 11:30:22',
            ),
            19 => 
            array (
                'id' => 24,
                'title' => 'Marble Tombstone',
                'image' => 'gallery/01KR3NNGBQ82AZ43R3AZY87QK6.jpg',
                'category' => 'bevel',
                'alt_text' => 'Marble Tombstone',
                'order' => 0,
                'created_at' => '2026-05-08 11:30:48',
                'updated_at' => '2026-05-08 11:30:48',
            ),
            20 => 
            array (
                'id' => 25,
                'title' => 'Red Granite Tombstone',
                'image' => 'gallery/01KR3NPCH86X8QP8Q4JG70N1V2.jpg',
                'category' => 'slant',
                'alt_text' => 'Red Granite Tombstone',
                'order' => 0,
                'created_at' => '2026-05-08 11:31:17',
                'updated_at' => '2026-05-08 11:31:17',
            ),
            21 => 
            array (
                'id' => 26,
                'title' => 'Military Headstones',
                'image' => 'gallery/01KR3NQZ9FFX3AHHBMTS0WQY23.jpg',
                'category' => 'upright',
                'alt_text' => 'Military Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:32:09',
                'updated_at' => '2026-05-08 11:32:09',
            ),
            22 => 
            array (
                'id' => 27,
                'title' => 'Grave Markers',
                'image' => 'gallery/01KR3NS0SASGFT2N89GWNM3CGR.jpg',
                'category' => 'slant',
                'alt_text' => 'Grave Markers',
                'order' => 0,
                'created_at' => '2026-05-08 11:32:43',
                'updated_at' => '2026-05-08 11:32:43',
            ),
            23 => 
            array (
                'id' => 28,
                'title' => 'Headstone Engraving',
                'image' => 'gallery/01KR3NSYCZF28KB77S82NGX97M.jpg',
                'category' => 'bevel',
                'alt_text' => 'Headstone Engraving',
                'order' => 0,
                'created_at' => '2026-05-08 11:33:14',
                'updated_at' => '2026-05-08 11:33:14',
            ),
            24 => 
            array (
                'id' => 29,
                'title' => 'Granite Headstones for Graves',
                'image' => 'gallery/01KR3NVYKGB8Z2N0D9K61SH21R.jpg',
                'category' => 'flat',
                'alt_text' => 'Granite Headstones for Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:34:20',
                'updated_at' => '2026-05-08 11:34:20',
            ),
            25 => 
            array (
                'id' => 30,
                'title' => 'Granite Memorial Stones',
                'image' => 'gallery/01KR3NWTR6JDNR7XAEBB17HNB9.jpg',
                'category' => 'flat',
                'alt_text' => 'Granite Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:34:48',
                'updated_at' => '2026-05-08 11:34:48',
            ),
            26 => 
            array (
                'id' => 31,
                'title' => 'Granite Cemetery Headstones',
                'image' => 'gallery/01KR3NXJRVQX9W9N77AM9ZK4EF.jpg',
                'category' => 'upright',
                'alt_text' => 'Granite Cemetery Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:35:13',
                'updated_at' => '2026-05-08 11:35:13',
            ),
            27 => 
            array (
                'id' => 32,
                'title' => 'Memorial Plaques For Graves',
                'image' => 'gallery/01KR3NYD34RKC9ZN61600SHG5Z.jpg',
                'category' => 'flat',
                'alt_text' => 'Memorial Plaques For Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:35:40',
                'updated_at' => '2026-05-08 11:35:40',
            ),
            28 => 
            array (
                'id' => 33,
                'title' => 'Custom Headstones',
                'image' => 'gallery/01KR3NZHAPPYS5KDYAGSRRRYFX.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:36:17',
                'updated_at' => '2026-05-08 11:36:17',
            ),
            29 => 
            array (
                'id' => 34,
                'title' => 'Personalized Memorial Stones',
                'image' => 'gallery/01KR3P0E4CGZGRDGNE46TR9DGS.jpg',
                'category' => 'custom',
                'alt_text' => 'Personalized Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:36:47',
                'updated_at' => '2026-05-08 11:36:47',
            ),
            30 => 
            array (
                'id' => 35,
                'title' => 'Memorial Headstones',
                'image' => 'gallery/01KR3P175D98Q61VPGAAKJCX6T.jpg',
                'category' => 'slant',
                'alt_text' => 'Memorial Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:37:12',
                'updated_at' => '2026-05-08 11:37:12',
            ),
            31 => 
            array (
                'id' => 36,
                'title' => 'Custom Granite Headstones',
                'image' => 'gallery/01KR3P2500Y6RXVZWB1Y4K90SH.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:37:43',
                'updated_at' => '2026-05-08 11:37:43',
            ),
            32 => 
            array (
                'id' => 37,
                'title' => 'Headstone Granite Vases',
                'image' => 'gallery/01KR3P34FAABN55K2FKRGDP7F0.jpg',
                'category' => 'flat',
                'alt_text' => 'Headstone Granite Vases',
                'order' => 0,
                'created_at' => '2026-05-08 11:38:15',
                'updated_at' => '2026-05-08 11:38:15',
            ),
            33 => 
            array (
                'id' => 38,
                'title' => 'Granite Headstones',
                'image' => 'gallery/01KR3P4MKGAERC4FT4WV2WMVBD.jpg',
                'category' => 'bevel',
                'alt_text' => 'Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:39:04',
                'updated_at' => '2026-05-08 11:39:04',
            ),
            34 => 
            array (
                'id' => 39,
                'title' => 'Headstone Granite Vases',
                'image' => 'gallery/01KR3P5JQAPTQX92T5WHAVPJYV.jpg',
                'category' => 'bevel',
                'alt_text' => 'Headstone Granite Vases',
                'order' => 0,
                'created_at' => '2026-05-08 11:39:35',
                'updated_at' => '2026-05-08 11:39:35',
            ),
            35 => 
            array (
                'id' => 40,
                'title' => 'Headstones For Graves',
                'image' => 'gallery/01KR3P6M6CP238CRRPN29TMAR0.jpg',
                'category' => 'slant',
                'alt_text' => 'Headstones For Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:40:09',
                'updated_at' => '2026-05-08 11:40:09',
            ),
            36 => 
            array (
                'id' => 41,
                'title' => 'Affordable Granite Gravestones',
                'image' => 'gallery/01KR3P8QC2KESDXBGEASGKDH5D.jpg',
                'category' => 'bevel',
                'alt_text' => 'Affordable Granite Gravestones',
                'order' => 0,
                'created_at' => '2026-05-08 11:41:18',
                'updated_at' => '2026-05-08 11:41:18',
            ),
            37 => 
            array (
                'id' => 42,
                'title' => 'Granite Gravestons',
                'image' => 'gallery/01KR3P9HYNPBY2XSRP0C35CSXT.jpg',
                'category' => 'custom',
                'alt_text' => 'Granite Gravestons',
                'order' => 0,
                'created_at' => '2026-05-08 11:41:45',
                'updated_at' => '2026-05-08 11:41:45',
            ),
            38 => 
            array (
                'id' => 43,
                'title' => 'Grave marker Design',
                'image' => 'gallery/01KR3PAJKBZ54W3ZJ1MRTCHB82.jpg',
                'category' => 'slant',
                'alt_text' => 'Grave marker Design',
                'order' => 0,
                'created_at' => '2026-05-08 11:42:19',
                'updated_at' => '2026-05-08 11:42:19',
            ),
            39 => 
            array (
                'id' => 44,
                'title' => 'Black Granite Headstones',
                'image' => 'gallery/01KR3PBE102C8F2A4NC4PKMDCT.jpg',
                'category' => 'upright',
                'alt_text' => 'Black Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:42:47',
                'updated_at' => '2026-05-08 11:42:47',
            ),
            40 => 
            array (
                'id' => 45,
                'title' => 'Custom Headstones Online',
                'image' => 'gallery/01KR3PCF1DR498RMJ14GBCZ0NT.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Headstones Online',
                'order' => 0,
                'created_at' => '2026-05-08 11:43:21',
                'updated_at' => '2026-05-08 11:43:21',
            ),
            41 => 
            array (
                'id' => 46,
                'title' => 'Memorial Granite',
                'image' => 'gallery/01KR3PD85VWQKHNA37E2R6XS5P.jpg',
                'category' => 'custom',
                'alt_text' => 'Memorial Granite',
                'order' => 0,
                'created_at' => '2026-05-08 11:43:46',
                'updated_at' => '2026-05-08 11:43:46',
            ),
            42 => 
            array (
                'id' => 47,
                'title' => 'Veterans Marker',
                'image' => 'gallery/01KR3PED02J9R2D09BJ4BH0YW2.jpg',
                'category' => 'bevel',
                'alt_text' => 'Veterans Marker',
                'order' => 0,
                'created_at' => '2026-05-08 11:44:24',
                'updated_at' => '2026-05-08 11:44:24',
            ),
            43 => 
            array (
                'id' => 48,
                'title' => 'Marble Tombstone',
                'image' => 'gallery/01KR3PF9CF7VBXT76B5NXAQHG3.jpg',
                'category' => 'slant',
                'alt_text' => 'Marble Tombstone',
                'order' => 0,
                'created_at' => '2026-05-08 11:44:53',
                'updated_at' => '2026-05-08 11:44:53',
            ),
            44 => 
            array (
                'id' => 49,
                'title' => 'Granite Tombstone',
                'image' => 'gallery/01KR3PG3QN5ED5KPBGWE8ZF0HN.jpg',
                'category' => 'flat',
                'alt_text' => 'Granite Tombstone',
                'order' => 0,
                'created_at' => '2026-05-08 11:45:20',
                'updated_at' => '2026-05-08 11:45:20',
            ),
            45 => 
            array (
                'id' => 50,
                'title' => 'Military and Civil Headstones',
                'image' => 'gallery/01KR3PGV2DKNFZ34CYR28N55PE.jpg',
                'category' => 'custom',
                'alt_text' => 'Military and Civil Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:45:44',
                'updated_at' => '2026-05-08 11:45:44',
            ),
            46 => 
            array (
                'id' => 51,
                'title' => 'Grave Markers',
                'image' => 'gallery/01KR3PHKEC0ABXS9CFES4TE1W3.jpg',
                'category' => 'bevel',
                'alt_text' => 'Grave Markers',
                'order' => 0,
                'created_at' => '2026-05-08 11:46:09',
                'updated_at' => '2026-05-08 11:46:09',
            ),
            47 => 
            array (
                'id' => 52,
                'title' => 'Headstone Engraving',
                'image' => 'gallery/01KR3PJAHVCBBKHTJ6W0E4YG1Y.jpg',
                'category' => 'custom',
                'alt_text' => 'Headstone Engraving',
                'order' => 0,
                'created_at' => '2026-05-08 11:46:33',
                'updated_at' => '2026-05-08 11:46:33',
            ),
            48 => 
            array (
                'id' => 53,
                'title' => 'Granite Headstones for Graves',
                'image' => 'gallery/01KR3PM3TDWHSY6NHVNQ6GXTPK.jpg',
                'category' => 'upright',
                'alt_text' => 'Granite Headstones for Graves',
                'order' => 0,
                'created_at' => '2026-05-08 11:47:31',
                'updated_at' => '2026-05-08 11:47:31',
            ),
            49 => 
            array (
                'id' => 54,
                'title' => 'Granite Memorial Stones',
                'image' => 'gallery/01KR3PMX3XPNPFPGT1EKAV6FFY.jpg',
                'category' => 'upright',
                'alt_text' => 'Granite Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:47:57',
                'updated_at' => '2026-05-08 11:47:57',
            ),
            50 => 
            array (
                'id' => 55,
                'title' => 'Granite Cemetery Headstones',
                'image' => 'gallery/01KR3PNK7E4D8ZNWM6WRPVVM3E.jpg',
                'category' => 'upright',
                'alt_text' => 'Granite Cemetery Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:48:20',
                'updated_at' => '2026-05-08 11:48:20',
            ),
            51 => 
            array (
                'id' => 56,
                'title' => 'Custom Granite Headstones',
                'image' => 'gallery/01KR3PPPPJ0WJ9VMCCTFHQDAFG.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Granite Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:48:56',
                'updated_at' => '2026-05-08 11:48:56',
            ),
            52 => 
            array (
                'id' => 57,
                'title' => 'Custom Headstones',
                'image' => 'gallery/01KR3PQF56VGX2SG0GQA0GETK5.jpg',
                'category' => 'custom',
                'alt_text' => 'Custom Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:49:21',
                'updated_at' => '2026-05-08 11:49:21',
            ),
            53 => 
            array (
                'id' => 58,
                'title' => 'Personalized Memorial Stones',
                'image' => 'gallery/01KR3PS0EP39VQ1M99MYE3MMWH.jpg',
                'category' => 'slant',
                'alt_text' => 'Personalized Memorial Stones',
                'order' => 0,
                'created_at' => '2026-05-08 11:50:12',
                'updated_at' => '2026-05-08 11:50:12',
            ),
            54 => 
            array (
                'id' => 59,
                'title' => 'Memorial Headstones',
                'image' => 'gallery/01KR3PSPYQ7FJC1NHQTTM9XYTJ.jpg',
                'category' => 'upright',
                'alt_text' => 'Memorial Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:50:35',
                'updated_at' => '2026-05-08 11:50:35',
            ),
            55 => 
            array (
                'id' => 60,
                'title' => 'Flat Markers For Cemetery',
                'image' => 'gallery/01KR3PTY2APXPMTW1Y1AHP1GFC.jpg',
                'category' => 'bronze',
                'alt_text' => 'Flat Markers For Cemetery',
                'order' => 0,
                'created_at' => '2026-05-08 11:51:15',
                'updated_at' => '2026-05-08 11:51:15',
            ),
            56 => 
            array (
                'id' => 61,
                'title' => 'Bronze Markers For Headstones ',
                'image' => 'gallery/01KR3PW3MNFAB62Y06A8VGXVJT.jpg',
                'category' => 'bronze',
                'alt_text' => 'Bronze Markers For Headstones ',
                'order' => 0,
                'created_at' => '2026-05-08 11:51:53',
                'updated_at' => '2026-05-08 11:51:53',
            ),
            57 => 
            array (
                'id' => 62,
                'title' => 'Granite And Bronze Grave Markers',
                'image' => 'gallery/01KR3PWTQ16DNEP8R9HRCEAKN0.jpg',
                'category' => 'bronze',
                'alt_text' => 'Granite And Bronze Grave Markers',
                'order' => 0,
                'created_at' => '2026-05-08 11:52:17',
                'updated_at' => '2026-05-08 11:52:17',
            ),
            58 => 
            array (
                'id' => 63,
                'title' => 'Bronze Memorials',
                'image' => 'gallery/01KR3PXGDAT7N4P153S6E0X5H0.jpg',
                'category' => 'bronze',
                'alt_text' => 'Bronze Memorials',
                'order' => 0,
                'created_at' => '2026-05-08 11:52:39',
                'updated_at' => '2026-05-08 11:52:39',
            ),
            59 => 
            array (
                'id' => 64,
                'title' => 'Flat Bronze Headstones',
                'image' => 'gallery/01KR3PY5578YMGGNQG6A10WZTQ.jpg',
                'category' => 'bronze',
                'alt_text' => 'Flat Bronze Headstones',
                'order' => 0,
                'created_at' => '2026-05-08 11:53:00',
                'updated_at' => '2026-05-08 11:53:00',
            ),
            60 => 
            array (
                'id' => 65,
                'title' => 'Bronze Cemetery Markers',
                'image' => 'gallery/01KR3PYQQT8PCJHJV8GXS56PF6.jpg',
                'category' => 'bronze',
                'alt_text' => 'Bronze Cemetery Markers',
                'order' => 0,
                'created_at' => '2026-05-08 11:53:19',
                'updated_at' => '2026-05-08 11:53:19',
            ),
            61 => 
            array (
                'id' => 66,
                'title' => 'Bronze On Granite Grave Markers',
                'image' => 'gallery/01KR3PZFEGD777YF17FJ8MQEA1.jpg',
                'category' => 'bronze',
                'alt_text' => 'Bronze On Granite Grave Markers',
                'order' => 0,
                'created_at' => '2026-05-08 11:53:44',
                'updated_at' => '2026-05-08 11:53:44',
            ),
            62 => 
            array (
                'id' => 67,
                'title' => 'Bronze Grave Plaques',
                'image' => 'gallery/01KR3Q08KHP77FVMHAH1D3C7GV.jpg',
                'category' => 'bronze',
                'alt_text' => 'Bronze Grave Plaques',
                'order' => 0,
                'created_at' => '2026-05-08 11:54:09',
                'updated_at' => '2026-05-08 11:54:09',
            ),
        ));
        
        
    }
}