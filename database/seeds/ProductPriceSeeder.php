<?php

use Illuminate\Database\Seeder;

class ProductPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->where('category_id',1)->update(
            [
                'product_price' => 10000
            ]
        );
        DB::table('products')->where('category_id',2)->update(
            [
                'product_price' => 20000
            ]
        );
        DB::table('products')->where('category_id',3)->update(
            [
                'product_price' => 30000
            ]
        );
        DB::table('products')->where('category_id',4)->update(
            [
                'product_price' => 40000
            ]
        );
        DB::table('products')->where('category_id',5)->update(
            [
                'product_price' => 50000
            ]
        );
        DB::table('products')->where('category_id',6)->update(
            [
                'product_price' => 60000
            ]
        );
        DB::table('products')->where('category_id',6)->update(
            [
                'product_price' => 60000
            ]
        );
        DB::table('products')->where('category_id',7)->update(
            [
                'product_price' => 70000
            ]
        );
        DB::table('products')->where('category_id',8)->update(
            [
                'product_price' =>80000
            ]
        );
        DB::table('products')->where('category_id',9)->update(
            [
                'product_price' => 90000
            ]
        );
        DB::table('products')->where('category_id',10)->update(
            [
                'product_price' => 100000
            ]
        );
    }
}
