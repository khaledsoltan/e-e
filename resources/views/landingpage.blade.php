@extends('layouts.app')

<div class="container">
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->


  <!--/.Carousel Wrapper-->
</div>
  <!--Main layout-->
  <main>
<div class="container">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Welcome</h1>
     </div>
</section>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">Categories:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
         
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
          @foreach( $categorys  as  $category)

            <li class="nav-item">
              <a class="nav-link" href="{{route('shopping', ['category' => $category->slug]) }}"> {{$category->name}}</a>
            </li>
           
          @endforeach

          </ul>
          <!-- Links -->

          <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->

    <!--------------------card------------------------------------------>
  <div class="row">
            @foreach( $products as $product)
                <div class="col-md-4">
                
                    <div class="card mb-2">
            <img src="{{asset ('img/'. $product->title .'.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
          <a href="{{route('product.show', $product ->slug)}}">        <h5 class="card-title">{{ $product->title }}</h5></a> 
                                <p class="card-text">{{$product->presentPrice() }}.</p>
                                <a href="{{route('cart.add', $product)}}" class="btn btn-primary"> Buy</a>
                            </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
  
  </div>
   
    </div>
  </main>
  <!--Main layout-->
