<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Bánh ngon ngày tết',
                'description'=>'Bánh trưng, bánh dày',
                'images'=>'http://media.doisongphapluat.com/2017/11/04/banh_gc.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Bánh trung thu',
                'description'=>'Bánh nướng bánh dẻo rằm tháng tám',
                'images'=>'http://www.savourydays.com/wp-content/uploads/2016/08/c%C3%A1ch-l%C3%A0m-b%C3%A1nh-trung-thu-banner.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Bánh tết hàn thực',
                'description'=>'Bánh trôi bánh chay',
                'images'=>'https://agiadinh.net/wp-content/uploads/2017/03/cach-lam-banh-troi-nuoc-8.jpg'
            ]
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
