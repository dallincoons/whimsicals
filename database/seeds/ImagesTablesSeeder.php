<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Image;


class ImagesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $products = Product::lists('id');

        $images = [
            '/img/bow_tie.jpg',
           '/img/coffee_table.jpg',
           '/img/gloves.jpeg',
           '/img/hat.jpg',
           '/img/knick_knacks.jpg',
           '/img/scotti_tie.jpg',
           '/img/shoes.jpg',
           '/img/sweater.jpeg',
           '/img/tie.jpeg',
           '/img/tie_cufflinks.jpg',
        ];

        $imageindex = 0;

        foreach($products as $product_id){

            Image::create([
                'product_id' => $product_id,
                'url' => $images[$imageindex],
                'thumbnail_url' => $images[$imageindex],
            ]);

            $imageindex++;

//            foreach(range(1, $random_num) as $index){
//
//                $random_image_num = $faker->numberBetween(1, (count($images)-1));
//
//                Image::create([
//                    'product_id' => $product_id,
//                    'url' => $images[$random_image_num],
//                ]);
//
//            }

        }

    }
}
