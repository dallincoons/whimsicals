<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsTableSeeder extends Seeder{

    /**
     * laravel will automaticall run this method
     * think of it as as the fire method
     */
    public function run()
    {

        factory('App\Product', 10)->create();

    }

}
