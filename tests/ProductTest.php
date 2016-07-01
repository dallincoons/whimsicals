<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\UploadedFile;
use App\Product;
use App\Image;

class ProductTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function make_a_photo()
    {
        $product = factory(Product::class, 1)->create();

        $file = new UploadedFile(
            'C:\Users\Admin\Projects\whimsical\storage\test\test_file.jpg',
            'test_file.jpg',
            'jpg',
            'null',
            'null',
            true
        );

        $this->assertTrue(file_exists($file->path()), 'Test file does not exist');

        $product->addPhoto($product, $file);

    }
}
