<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['mainphoto'];

    public function product()
    {

        return $this->belongsTo(Product::class);

    }
}
