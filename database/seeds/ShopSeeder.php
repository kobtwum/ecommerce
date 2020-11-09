<?php

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('shops')->delete();

        \DB::table('shops')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Faith Wear',
                'user_id' => 4,
                'is_active' => 1,
                'description' => 'We sell on kinds of fashion wears; clothes, shoes, sandals, slippers and accessories',
                'rating' => NULL,
                'created_at' => '2020-10-29 11:20:20',
                'updated_at' => '2020-11-07 08:01:41',
            ),

            1 =>
            array (
                'id' => 2,
                'name' => 'John Masons',
                'user_id' => 3,
                'is_active' => 1,
                'description' => 'Dealers in building material',
                'rating' => NULL,
                'created_at' => '2020-10-29 11:20:20',
                'updated_at' => '2020-11-07 08:01:41',
            ),

            2 =>
            array (
                'id' => 3,
                'name' => 'Grovesburg Accessories',
                'user_id' => 1,
                'is_active' => 1,
                'description' => 'Dealers in assorted jewelries of various brands',
                'rating' => NULL,
                'created_at' => '2020-10-29 11:20:20',
                'updated_at' => '2020-11-07 08:01:41',
            ),

        ));
    }
}
