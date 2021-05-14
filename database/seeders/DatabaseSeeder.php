<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('gif_apis')->insert(array(
            array(
                'key' => 'boy',
                'name' => 'gif8.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'boy',
                'name' => 'gif8.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif3.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif1.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif3.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'boy',
                'name' => 'gif8.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif1.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'boy',
                'name' => 'gif8.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif3.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif1.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif3.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif1.gif',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'key' => 'cat',
                'name' => 'gif3.gif',
                'created_at' => now(),
                'updated_at' => now(),
            )

            ));

    }
}
