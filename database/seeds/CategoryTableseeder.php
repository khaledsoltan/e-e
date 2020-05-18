<?php

use Illuminate\Database\Seeder;
use App\category;
class CategoryTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          App\category::create([
            'name' => 'labs',
            'slug' => 'labs-',
            ]);
          App\category::create([
            'name' => 't-shirts',
            'slug' => 't-shirts',
            ]);
          App\category::create([
            'name' => 'phones',
            'slug' => 'phones-',
            ]);
          App\category::create([
            'name' => 'JEANS',
            'slug' => 'JEANS',
            ]);

       
    }
}
