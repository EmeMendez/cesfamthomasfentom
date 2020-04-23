<?php

use Illuminate\Database\Seeder;
use App\Banner;
class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create(
            ['title' => 'Primer banner y su titulo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptas hic placeat modi illum suscipit fuga amet quasi? Fugiat possimus quae culpa tempore itaque repellat aperiam nostrum sunt distinctio asperiores inventore eum accusamus volup.',
            'path' => 'images/banners/banner1.jpg',
            'link' => 'http://www.google.com',
            'created_at' => now(),
            'updated_at' => now()
            ]);
        Banner::create(
            ['title' => 'SEGUNDO banner y su titulo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptas hic placeat modi illum suscipit fuga amet quasi? Fugiat possimus quae culpa tempore itaque repellat aperiam nostrum sunt distinctio asperiores inventore eum accusamus volup.',
            'path' => 'images/banners/banner2.jpg',
            'link' => 'http://www.google.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Banner::create(
            ['title' => 'tERCER banner y su titulo',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium voluptas hic placeat modi illum suscipit fuga amet quasi? Fugiat possimus quae culpa tempore itaque repellat aperiam nostrum sunt distinctio asperiores inventore eum accusamus volup.',
            'path' => 'images/banners/banner3.jpg',
            'link' => 'http://www.google.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);                

    }
}
