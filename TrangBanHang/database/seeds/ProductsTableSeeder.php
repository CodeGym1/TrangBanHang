<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->id = 1;
        $product->name = 'Inphone 7 32GB';
        $product->category_id = '3';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'iphone-78-400x460.png';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();

        $product = new Product();
        $product->id = 2;
        $product->name = 'sony-xperia-x1';
        $product->category_id = '2';
        $product->description = 'fefefef';
        $product->price = 10000000;
        $product->image = 'sony-xperia-x-1-400x460.png';
        $product->unit = 'hop';
        $product->new = '1';
        $product->save();
    }
}
