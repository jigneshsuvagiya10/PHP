<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
use Faker\Generator as Faker;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('product')->insert([
                'product_title' => $faker->name,
                'product_description' => $faker->realText(rand(100,200)),
                'product_qunatity' => $faker->numberBetween(1,20),
                'product_price' => rand(100,9999),
                'product_image' => Str::random(10).'.jpeg',
            ]);
        }
        // DB::table('product')->insert([
        //     'product_title' => Str::random(10),
        //     'product_description' => Str::random(100),
        //     'product_qunatity' => rand(100,9999),
        //     'product_price' => rand(1,99),
        //     'product_image' => Str::random(10).'jpeg',
        // ]);
    }
}
