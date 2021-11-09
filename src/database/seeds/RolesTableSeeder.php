<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
        $roles = [];

        $roles = [
            ['name' => 'admin'], ['name' => 'user']
        ];

        DB::table('roles')->insert($roles);
>>>>>>> b8556094e9b4e2ca04fa35d9c8e2e8ad9fa1640d
    }
}
