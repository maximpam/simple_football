<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RolesTableSeeder::class);
        factory(\App\User::class, 20)->create();
        $this->call(CategoriesTableSeeder::class);
        factory(\App\Models\BlogPost::class, 40)->create();
    }
}
