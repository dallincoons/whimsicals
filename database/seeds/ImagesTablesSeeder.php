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
            'http://cdn.abclocal.go.com/content/kgo/images/cms/544966_1280x720.jpg',
            'http://cdn1.theodysseyonline.com/files/2016/01/10/635880403615266094-892416457_pup.jpeg',
            'http://www.iflscience.com/sites/www.iflscience.com/files/styles/ifls_large/public/blog/%5Bnid%5D/shutterstock_334735247.jpg?itok=xlMGldKa',
            'http://www.shangralafamilyfun.com/2010/puppy0.jpg',
            'http://pimm.barkpost.com/wp-content/uploads/2014/09/apparentlykidcommercial.jpg?q=70&fit=crop&crop=entropy&w=808&h=500f',
            'http://www.awesomeinventions.com/wp-content/uploads/2015/05/Puppy.jpg',
            'https://s-media-cache-ak0.pinimg.com/736x/ca/b3/76/cab37626bfb76e482a04fe1521d98504.jpg'
        ];

        foreach($products as $product_id){

            $random_num = $faker->numberBetween(1, 5);

            Image::create([
                'product_id' => $product_id,
                'url' => $images[$random_num],
            ]);

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
