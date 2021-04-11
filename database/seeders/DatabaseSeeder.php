<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory(storage_path ('app/public/cursos'));
        Storage::makeDirectory(storage_path ('app/public/cursos'));

        // \App\Models\User::factory(10)->create();

        $this->call(PermissionSeeder::class);
        
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(LevelSeeder::class);

        $this->call(CategorySeeder::class);

        $this->call(PriceSeeder::class);

        $this->call(DaySeeder::class);

        $this->call(CourseSeeder::class);
       
    }
}