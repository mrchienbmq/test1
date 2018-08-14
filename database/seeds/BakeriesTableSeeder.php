<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BakeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bakeries')->truncate();
        DB::table('bakeries')->insert([
            [
                'name'=>'Bánh nướng đậu xanh',
                'description'=>'Bánh ngon',
                'price'=>40000,
                'categoryId'=>2,
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content'=>'Bánh ngon',
                'note'=>'Bánh ngon',
            ],
            [
                'name'=>'Bánh nướng đậu đỏ',
                'description'=>'Bánh ngon',
                'price'=>45000,
                'categoryId'=>2,
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content'=>'Bánh ngon',
                'note'=>'Bánh ngon',
            ],
            [
                'name'=>'Bánh nướng đậu đen',
                'description'=>'Bánh ngon',
                'price'=>40000,
                'categoryId'=>2,
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content'=>'Bánh ngon',
                'note'=>'Bánh ngon',
            ],
            [
                'name'=>'Bánh chay',
                'description'=>'Bánh ngon',
                'price'=>20000,
                'categoryId'=>3,
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content'=>'Bánh ngon',
                'note'=>'Bánh ngon',
            ],
            [
                'name'=>'Bánh trưng',
                'description'=>'Bánh ngon',
                'price'=>50000,
                'categoryId'=>1,
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content'=>'Bánh ngon',
                'note'=>'Bánh ngon',
            ],
        ]);
    }
}
