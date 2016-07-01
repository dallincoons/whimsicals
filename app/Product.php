<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class Product extends Model
{
    const ASSET_IMAGE_BASE = 'asset_product_images';

    protected $fillable = ['title', 'price', 'description', 'quantity'];

    public function images()
    {
        return $this->hasOne(Image::class);
    }

    public static function fromForm($file)
    {
        $photo = new static;
    }

    public function scopeWithImages()
    {

    }

    public static function destroy($productIds)
    {
        foreach($productIds as $productId)
        {
            File::deleteDirectory(public_path() . DIRECTORY_SEPARATOR . 'asset_product_images/' . $productId) ? 'true' : 'false';
        }


        parent::destroy($productIds);
    }

    public function addPhoto($product, $file)
    {
        $name = time() . $file->getClientOriginalName();

        $url = self::ASSET_IMAGE_BASE . '/' . $product->id . '/';

        $file->move($url, $name);

//        Image::make($url . $name)->orientate()->save($url . $name);


    }
}
