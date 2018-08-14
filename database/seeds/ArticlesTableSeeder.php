<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('articles')->truncate();
        \Illuminate\Support\Facades\DB::table('articles')->insert([
            [
                'name'=>'Banh ngon ngay tet',
                'author'=>'Thao',
                'content'=>'Banh ngon lam',
                'images'=>'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg'
            ],
            [
                'name'=>'Banh ngon ngay mua',
                'author'=>'Thao',
                'content'=>'Banh ngon binh thuong',
                'images'=>'https://afamilycdn.com/L9AscbailKNM6qlDjYJqDI39UnIrac/Image/2016/03/xac-phat-them-voi-10-mon-banh-dan-da-ngon-lanh-cua-duong-pho-sai-gon_ab77e8b167.jpg'
            ],
            [
                'name'=>'Banh ngon ngay nang',
                'author'=>'Thao',
                'content'=>'Banh rat ngon',
                'images'=>'https://c2.staticflickr.com/6/5825/22970996514_a721f12743.jpg'
            ],
            [
                'name'=>'Banh ngon ngay ram',
                'author'=>'Thao',
                'content'=>'Banh kha ngon',
                'images'=>'https://daylambanh.r.worldssl.net/images/kienthuckynang/banh-mi-bread.jpg'
            ]
        ]);
    }
}
