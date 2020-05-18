<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            App\Product::create([
            'title' => 'Laptop1',
            'slug' => 'Laptop1-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(1);
           App\Product::create([
            'title' => 'Laptop2',
            'slug' => 'Laptop2-',

            'price' => '300',
             'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

                        
        ])->categories()->attach(1);
             App\Product::create([
            'title' => 'Laptop3',
            'slug' => 'Laptop3-',

            'price' => '400',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(1);
             App\Product::create([
            'title' => 'Laptop4',
            'slug' => 'Laptop4-',
            'price' => '500',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(1);
            App\Product::create([
            'title' => 'Laptop5',
             'slug' => 'Laptop5-',

            'price' => '600',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(1);  
         App\Product::create([
            'title' => 'Laptop6',
            'slug' => 'Laptop6-',

            'price' => '700',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(1);
/***************************************T-shirts **************************************/
    
         App\Product::create([
            'title' => 'T-shirt1',
            'slug' => 'T-shirt-1',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(2);
           App\Product::create([
            'title' => 'T-shirt2',
            'slug' => 'T-shirt-2',

            'price' => '300',
             'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

                        
        ])->categories()->attach(2);
             App\Product::create([
            'title' => 'T-shirt3',
            'slug' => 'T-shirt-3',

            'price' => '400',
            'description' => 'y tipo wey, estaba allí, y me mir2
                              and like I was there, and looked at me',

            
        ])->categories()->attach(2);
             App\Product::create([
            'title' => 'T-shirt4',
            'slug' => 'T-shirt-4',
            'price' => '500',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(2);
            App\Product::create([
            'title' => 'T-shirt5',
             'slug' => 'T-shirt-5',

            'price' => '600',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(2);  
         App\Product::create([
            'title' => 'T-shirt6',
            'slug' => 'T-shirt-5',

            'price' => '700',
            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',

            
        ])->categories()->attach(2);

/*****************************************************************************/
/*************************************phones****************************************/
    


         App\Product::create([
            'title' => 'iphone1',
            'slug' => 'iphone-1',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone2',
            'slug' => 'iphone-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone3',
            'slug' => 'iphone-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone4',
            'slug' => '-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone5',
            'slug' => 'iphone-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone6',
            'slug' => 'iphone-',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

         App\Product::create([
            'title' => 'iphone7',
            'slug' => 'iphone',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(3);

/*************************************phones****************************************/



/*************************************JEANS****************************************/
         App\Product::create([
            'title' => 'JEANS1',
            'slug' => 'JEANS-1',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);
 App\Product::create([
            'title' => 'JEANS2',
            'slug' => 'JEANS-2',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);
 App\Product::create([
            'title' => 'JEANS3',
            'slug' => 'JEANS-3',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);
 App\Product::create([
            'title' => 'JEAN4',
            'slug' => 'JEANS-4',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);
 App\Product::create([
            'title' => 'JEANS5',
            'slug' => 'JEANS-5',
            'price' => '100',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);
 App\Product::create([
            'title' => 'JEANS6',
            'slug' => 'JEANS-6',
            'price' => '300',

            'description' => 'y tipo wey, estaba allí, y me miró
                              and like I was there, and looked at me',


            
        ])->categories()->attach(4);

    }
}
