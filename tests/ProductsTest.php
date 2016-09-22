<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Product;

class ProductsTest extends TestCase
{
    public function test_products_list()
    {

        //Having
        Product::create([
            'name' => 'Producto 1',
            'price' => 12,
            'description' => 'lo mejor de lo mejor :v'
        ]);
        Product::create([
            'name' => 'Producto 2',
            'price' => 20,
            'description' => 'lo mejor de lo mejor jijitl'
        ]);

        //When
        $this->visit('products')
            ->see('Producto 1')
            ->see('Producto 2');
    }
}
