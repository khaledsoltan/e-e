@extends('layouts.app')

@extends('layouts.app')


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
         @if($cart)
        <div class="col-12">
             @foreach( $cart->items as $product)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td><img src="" /> </td>
                            <td>  {{ $product['title'] }}</td>
                            <td>In stock</td>
                                            
                           
                            
                           

                        <form action="{{ route('product.update',$product['id'])}}" method="post">
                         @csrf
                        @method('put')
                            <td><input type="text" name="qty" id="qty" value={{ $product['qty']}}></td>
                            <td class="text-right">${{$product['price'] }}
                            </td>
                           <td class="text-right"><button class="btn btn-sm btn-success">+</button>
                         </form>

                          
                       </form>
                <form action="{{ route('product.remove', $product['id'] )}}" method="post">
                                                @csrf
                                                @method('delete')
                              <button class="btn btn-sm btn-danger">
                              <i class="fa fa-trash"></i> 
                            </button>
                        </form>
                          </td>

                        </tr>
                      
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong> ${{$cart->totalPrice}}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                                @endforeach

        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href = "{{route('shopping')}}"
                    class="btn btn-block btn-light">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{route ('cart.checkout' , $cart->totalPrice)}}" class="btn btn-lg btn-block btn-success text-uppercase">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

