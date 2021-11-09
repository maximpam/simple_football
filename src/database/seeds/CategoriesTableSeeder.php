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
<<<<<<< HEAD
        //
=======
        $categories = [];


        for ($i = 1; $i <= 10; $i++){
            $cName = 'Category#'. $i;
            $categories [] =[
                'title' => $cName,
                'slug' => Str::slug($cName)
            ];
        }
        DB::table('categories')->insert($categories);
>>>>>>> b8556094e9b4e2ca04fa35d9c8e2e8ad9fa1640d
    }
}
