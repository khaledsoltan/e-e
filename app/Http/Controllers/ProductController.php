<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\category;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


public function index()
    {

   if (request()->category) {

      $products = Product::with('categories')->whereHas('categories', function ($query){$query->where('slug', request()->category);
            })->get();
            $categories = category::all();


            }else{

                $categories = category::all();

                $products = Product::inRandomOrder()->take(6)->get();


            } 

            return  view('landingpage')->with([
            'products'=> $products,
            'categorys' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     

/******************************************************************************/
/***********************************addToCart*********************************/

   public function addToCart(Product $product) {
        
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($product);
        //dd($cart);
          session()->put('cart', $cart);
        return redirect()->route('shopping')->with('success', 'Product was added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

/******************************************************************************/
/******************************showCart****************************************/


     public function showCart() {

        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = null;
        }
         
        return view('cart', compact('cart'));
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
/******************************************************************************//***************************************show_product**************************/
    
    public function show($slug)
    {
      $product = Product::where('slug',$slug)->firstOrFail();
      $related =Product::inRandomOrder()->take(6)->get();
      $categorys = category::all();


      return view('product', [
        'product' =>  $product,
        'related' =>  $related,
        'categorys' => $categorys

    ]);
    }

/***************************************checkout*********************************/     
     public function checkout($amount) {
    
            return view('checkout',compact('amount'));
    }


   
    /**
     * Update the specified resource in storage.
/***************************************update_product************************/ /*   
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);

        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);
        return redirect()->route('cart.show')->with('success', 'Product updated');
    }



    /**
     * Remove the specified resource from storage.******
     ***************************************************
     *
     ***************************************************



/***************************************destroy product*************************/  
        public function destroy(Product $product)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($product->id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was removed');

       
    }
/*********************************charge stripe************************/  


     public function charge(Request $request) {
        \Stripe\Stripe::setApiKey('sk_test_VQEk3Y9BOrT9knSSZHkMcmRU00AKbk42F9');

        $charge = \Stripe\PaymentIntent::create([
        'amount' => $request->amount,
        
        'currency' => 'usd',
        // Verify your integration in this guide by including this parameter
        'metadata' => ['integration_check' => 'accept_a_payment'],
]);
        //dd($request->stripeToken);
        

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            auth()->user()->orders()->create([
              'cart' => serialize( session()->get('cart'))
            ]);
            session()->forget('cart');  
            return redirect()->route('shopping')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
    }

}
