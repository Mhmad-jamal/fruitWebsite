@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5" id="ContainerSection">
<div class="row d-flex     justify-content-center" id="customediv">

  @foreach ($products as $product)
  <div class="col-md-3 m-5 containerCategory">
    @auth
    <a class="containerCategory" href="{{ route('product', ['id' => $product->id]) }}">
    @else
    <a class="containerCategory" href="{{ route('login') }}">
    @endauth
      <div class="d-flex flex-column card-wrapper">
        <img class="img-fluid custom-width mx-auto image-top-center" src="{{asset('storage/'.$product->product_image)}}" alt="">
        <div class="CustomTextCard mt-3">
          <h2 class="text-center title">{{$product->product_name}}</h2>
          <p class="text-justify customP text-center text-truncate">
            {{$product->product_details}}
          </p>
          <h2 class="text-center">{{$product->one_time_price}}<span>  $</span></h2>
          <button id="orderbtn">Add To Basket</button>
        </div>
      </div>
    </a>
  </div>
  @endforeach
  
  
  
 

    
  
  </div>
  

  </div>
@endsection