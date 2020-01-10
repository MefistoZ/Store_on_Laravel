<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'iPhone X 64GB',
                'code' => 'iphone_x_64',
                'short_description' => 'Отличный продвинутый телефон с памятью на 64 gb',
                'description' => 'Отличный продвинутый телефон с памятью на 64 gb',
                'price' => '71990',
                'category_id' => 1,
                'image' => 'products/iphone_x.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'iPhone X 256GB',
                'code' => 'iphone_x_256',
                'short_description' => 'Отличный продвинутый телефон с памятью на 256 gb',
                'description' => 'Отличный продвинутый телефон с памятью на 256 gb',
                'price' => '89990',
                'category_id' => 1,
                'image' => 'products/iphone_x_silver.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'HTC One S',
                'code' => 'htc_one_s',
                'short_description' => 'Зачем платить за лишнее? Легендарный HTC One S',
                'description' => 'Зачем платить за лишнее? Легендарный HTC One S',
                'price' => '12490',
                'category_id' => 1,
                'image' => 'products/htc_one_s.png',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Наушники Beats Audio',
                'code' => 'beats_audio',
                'short_description' => 'Отличный звук от Dr. Dre',
                'description' => 'Отличный звук от Dr. Dre',
                'price' => '20221',
                'category_id' => 2,
                'image' => 'products/beats.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Камера GoPro',
                'code' => 'gopro',
                'short_description' => 'Снимай самые яркие моменты с помощью этой камеры',
                'description' => 'Снимай самые яркие моменты с помощью этой камеры',
                'price' => '12000',
                'category_id' => 2,
                'image' => 'products/gopro.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Камера Panasonic HC-V770',
                'code' => 'panasonic_hc-v770',
                'short_description' => 'Для серьёзной видео съемки нужна серьёзная камера.',
                'description' => 'Для серьёзной видео съемки нужна серьёзная камера. Panasonic HC-V770 для этих целей лучший выбор!',
                'price' => '27900',
                'category_id' => 2,
                'image' => 'products/video_panasonic.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Кофемашина DeLongi',
                'code' => 'delongi',
                'short_description' => 'Хорошее утро начинается с хорошего кофе!',
                'description' => 'Хорошее утро начинается с хорошего кофе!',
                'price' => '25200',
                'category_id' => 3,
                'image' => 'products/delongi.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Холодильник Haier',
                'code' => 'haier',
                'short_description' => 'Для большой семьи большой холодильник!',
                'description' => 'Для большой семьи большой холодильник!',
                'price' => '40200',
                'category_id' => 3,
                'image' => 'products/haier.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Блендер Moulinex',
                'code' => 'moulinex',
                'short_description' => 'Для самых смелых идей',
                'description' => 'Для самых смелых идей',
                'price' => '4200',
                'category_id' => 3,
                'image' => 'products/moulinex.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Мясорубка Bosch',
                'code' => 'bosch',
                'short_description' => 'Любите домашние котлеты?',
                'description' => 'Любите домашние котлеты? Вам определенно стоит посмотреть на эту мясорубку!',
                'price' => '9200',
                'category_id' => 3,
                'image' => 'products/bosch.jpg',
                //'count' => rand(0, 10),
            ],
            [
                'name' => 'Samsung Galaxy J6',
                'code' => 'samsung_j6',
                'short_description' => 'Современный телефон начального уровня',
                'description' => 'Современный телефон начального уровня',
                'price' => '11980',
                'category_id' => 1,
                'image' => 'products/samsung_j6.jpg',
                //'count' => rand(0, 10),
            ],
        ];
        DB::table('products')->insert($products);

    }
}
