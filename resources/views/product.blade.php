@extends('layouts.app')
<!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="{{asset ('img/'. $product->title .'.jpg')}}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">
            <div class="mb-3">

              <a href="">
                <span class="badge blue mr-1">New</span>
              </a>
              <a href="">
                <span class="badge red mr-1">Bestseller</span>
              </a>
            </div>

            <p class="lead">
               
              <span>{{$product->presentPrice() }}.</span>
            </p>

            <p class="lead font-weight-bold">{{$product->title}}</p>

            <p>{{$product->description}}</p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
             <a href="{{route('cart.add', $product)}}" class="btn btn-primary btn-md my-0 p" type="submit"> Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
                </a>

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

 
  </div>
<!--/.Carousel Wrapper-->

    </div>
  </main>
  <!--Main layout-->