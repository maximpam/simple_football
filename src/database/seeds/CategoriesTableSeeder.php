<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];


        for ($i = 1; $i <= 10; $i++){
            $cName = 'Category#'. $i;
            $categories [] =[
                'title' => $cName,
                'slug' => Str::slug($cName)
            ];
        }
        DB::table('categories')->insert($categories);
    }
}
