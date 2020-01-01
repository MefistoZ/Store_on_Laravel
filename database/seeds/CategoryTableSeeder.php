<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = 'Без категории';
        $categories[] = [
            'name' => $cName,
            'code' => Str::slug($cName),
        ];

        for ($i = 1; $i <= 5; $i++){
            $cName = 'Категория № '.$i;

            $categories[]=[
                'name' => $cName,
                'code' => Str::slug($cName),
            ];
        }
        \DB::table('categories')->insert($categories);
    }
}
