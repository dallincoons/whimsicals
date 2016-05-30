<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Product extends Model
{
    protected $fillable = ['title', 'price', 'description', 'quantity'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public static function fromForm($file)
    {
        $photo = new static;
    }

    public static function destroy($productIds)
    {
        foreach($productIds as $productId)
        {
            File::deleteDirectory(public_path() . DIRECTORY_SEPARATOR . 'asset_product_images/' . $productId) ? 'true' : 'false';
        }


        parent::destroy($productIds);
    }

    public function getDescriptionAttribute($description)
    {
        return nl2br($description);
    }
}
