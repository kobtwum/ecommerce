<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'order' => 2,
                'name' => 'Accessories',
                'slug' => 'accessories',
                'created_at' => '2020-11-10 08:52:16',
                'updated_at' => '2020-11-10 08:58:56',
            ),
            1 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Electronics',
                'slug' => 'electronics',
                'created_at' => '2020-11-10 08:53:01',
                'updated_at' => '2020-11-10 08:53:01',
            ),
            2 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 1,
                'name' => 'Computers and Laptops',
                'slug' => 'computers-and-laptops',
                'created_at' => '2020-11-10 08:59:21',
                'updated_at' => '2020-11-10 08:59:21',
            ),
            3 => 
            array (
                'id' => 6,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Watches',
                'slug' => 'watches',
                'created_at' => '2020-11-10 09:00:40',
                'updated_at' => '2020-11-10 09:00:40',
            ),
            4 => 
            array (
                'id' => 7,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Hp',
                'slug' => 'hp',
                'created_at' => '2020-11-10 09:02:10',
                'updated_at' => '2020-11-10 09:02:10',
            ),
            5 => 
            array (
                'id' => 8,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'created_at' => '2020-11-10 09:02:25',
                'updated_at' => '2020-11-10 09:02:25',
            ),
            6 => 
            array (
                'id' => 9,
                'parent_id' => 3,
                'order' => 1,
                'name' => 'Necklaces',
                'slug' => 'necklaces',
                'created_at' => '2020-11-10 10:34:28',
                'updated_at' => '2020-11-10 10:34:28',
            ),
            7 => 
            array (
                'id' => 10,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Acer',
                'slug' => 'acer',
                'created_at' => '2020-11-10 10:51:25',
                'updated_at' => '2020-11-10 10:51:25',
            ),
            8 => 
            array (
                'id' => 11,
                'parent_id' => 5,
                'order' => 1,
                'name' => 'Dell',
                'slug' => 'dell',
                'created_at' => '2020-11-10 10:51:53',
                'updated_at' => '2020-11-10 10:51:53',
            ),
            9 => 
            array (
                'id' => 12,
                'parent_id' => 4,
                'order' => 1,
                'name' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'created_at' => '2020-11-10 10:52:44',
                'updated_at' => '2020-11-10 10:52:44',
            ),
            10 => 
            array (
                'id' => 13,
                'parent_id' => 12,
                'order' => 1,
                'name' => 'Samsung',
                'slug' => 'samsung',
                'created_at' => '2020-11-10 10:53:16',
                'updated_at' => '2020-11-10 10:53:16',
            ),
            11 => 
            array (
                'id' => 14,
                'parent_id' => 12,
                'order' => 1,
                'name' => 'Nokia',
                'slug' => 'nokia',
                'created_at' => '2020-11-10 10:53:28',
                'updated_at' => '2020-11-10 10:53:28',
            ),
            12 => 
            array (
                'id' => 15,
                'parent_id' => 12,
                'order' => 1,
                'name' => 'Iphone',
                'slug' => 'iphone',
                'created_at' => '2020-11-10 10:53:42',
                'updated_at' => '2020-11-10 10:53:42',
            ),
        ));
        
        
    }
}