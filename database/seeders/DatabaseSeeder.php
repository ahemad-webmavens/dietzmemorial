<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(PageSectionsTableSeeder::class);
        $this->call(PageSectionItemsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(GraniteColorsTableSeeder::class);
        $this->call(GalleryItemsTableSeeder::class);
        $this->call(MemorialGuidesTableSeeder::class);
        $this->call(BlogPostsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
    }
}
