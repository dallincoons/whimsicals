<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Product;
use App\Image;


class ProductControllerTest extends TestCase
{

    use DatabaseTransactions;

    /** @test */
    public function on_index_posts_are_returned_in_descending_order()
    {
        $product = factory(Product::class, 2)->create();

        $this->createImages();

        $this->call('GET', '/products');

        $this->assertResponseOk();
        $this->assertCount(2, $product);
        $this->assertViewHas('products');
    }

    private function createImages()
    {

        $products = Product::lists('id');

        foreach($products as $product_id){

            Image::create([
                'product_id' => $product_id,
                'url' => 'http://cdn.abclocal.go.com/content/kgo/images/cms/544966_1280x720.jpg',
                'thumbnail_url' => 'http://cdn.abclocal.go.com/content/kgo/images/cms/544966_1280x720.jpg',
            ]);

        }

    }

}