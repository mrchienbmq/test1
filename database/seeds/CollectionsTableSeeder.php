<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('collections')->truncate();
        \Illuminate\Support\Facades\DB::table('collections')->insert([
            [
                'name'=>'Bộ sưu tập mùa xuân',
                'description'=>'Những món ăn mùa xuân',
                'images'=>'https://anh.eva.vn/upload/3-2016/images/2016-09-01/1472686104-banh-nuong-khong-duong--17--watermark.jpg'
            ],
            [
                'name'=>'Bộ sưu tập mùa hạ',
                'description'=>'Những món ăn mùa hạ',
                'images'=>'http://phapluatnet.vn/Uploads/images/banh-ngot9.jpg'
            ],
            [
                'name'=>'Bộ sưu tập mùa thu',
                'description'=>'Những món ăn mùa thu',
                'images'=>'https://image.thanhnien.vn/665/uploaded/triquang/2017_03_24/suachua_kvpj.jpg'
            ],
            [
                'name'=>'Bộ sưu tập mùa đông',
                'description'=>'Những món ăn mùa đông',
                'images'=>'http://satbabau.vn/wp-content/uploads/2017/03/an-gi-de-sinh-con-trai-con-gai-4-1.jpg'
            ]
        ]);
    }
}
