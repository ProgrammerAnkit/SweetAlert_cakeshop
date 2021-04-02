<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $product = new \App\Product([
          'imagepath' => 'img/doughnut-1.jpeg',
          'title'=>'dougnut item',
          'price'=>10,
      ]);
      $product->save();

      $product = new \App\Product([
        'imagepath' => 'img/sweets-2.jpeg',
        'title'=>'sweet item',
        'price'=>5,
    ]);
    $product->save();

    $product = new \App\Product([
        'imagepath' => 'img/cupcake-2.jpeg',
        'title'=>'cupcake item',
        'price'=>15,
    ]);
    $product->save();

    $product = new \App\Product([
        'imagepath' => 'img/cake-2.jpeg',
        'title'=>'cake item',
        'price'=>10,
    ]);
    $product->save();

    $product = new \App\Product([
        'imagepath' => 'img/doughnut-2.jpeg',
        'title'=>'dougnut item',
        'price'=>10,
    ]);
    $product->save();

    $product = new \App\Product([
        'imagepath' => 'img/sweets-3.jpeg',
        'title'=>'sweet item',
        'price'=>10,
    ]);
    $product->save();

    }
}
