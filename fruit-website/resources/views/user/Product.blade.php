@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('user/css/product.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <section class="container-fluid d-flex justify-content-center mb-3 " id="customediv">

        <div class="row" id="customRow">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="circle-container d-flex justify-content-start">
                        <h1 id="title" class="display- font-weight-bold"> Basket details</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-12" id="leftcol">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row" id="ContainerRow" style="padding: 19px;">
                            <div class="col-md-5 text-center customeText" style="padding: 19px;">
                                <div class="container">
                                    <h1 class="display-4"
                                        style="font-size:1.5rem; font-weight: 900;font-family: monospace;text-align: start;">
                                        {{ $product->product_name }}</h1>
                                    <p class="lead text-left description"
                                        style="padding: 5px; font-size: 1rem; font-family: ui-serif; font-weight: 200; letter-spacing: 0.2px; ">
                                        {{ $product->product_details }}</p>
                                </div>

                            </div>
                            <div class="col-md-5 d-flex   customeText flex-column" style="padding: 19px;">
                                <div class="col-md-6">
                                    <h1 class="display-4"
                                        style="font-size: 2.2rem;font-weight: 700;font-family: monospace;text-align: start;">
                                        Contain</h1>
                                </div>
                                @php
                                    $string = $product->product_contain;
                                    $items = explode('-', $string);
                                    $hasHyphen = strpos($string, '-') !== false;
                                    $itemChunks = array_chunk($items, 3);
                                @endphp

                                <div class="col text-left" id="content">
                                    <div class="row">
                                        @if ($hasHyphen)
                                            @foreach ($itemChunks as $chunk)
                                                <div class="col-3 text-left" style="font-family: ui-serif;">
                                                    <ul class="list-unstyled">
                                                        @foreach ($chunk as $item)
                                                            <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="col-3 text-left" style="font-family: ui-serif;">
                                                <ul class="list-unstyled">
                                                    <li>{{ $string }}</li>
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="selector-item" style="align-items: center; display: flex; justify-content: space-between; width: 100%;">
                                    <div style="display: flex; flex-direction: row; align-items: center; width: 100%;">
                                      <input type="radio" id="radio1" data-point="{{ $product->one_time_point }}" value="{{ $product->one_time_price }}" name="selector" class="selector-item_radio" checked>
                                      <label for="radio1" class="selector-item_label">
                                        <h2>One Time</h2>
                                        <p class="text-left customeText">{{ $product->one_time_price }}</p>
                                      </label>
                                      <input type="radio" id="radio2" name="selector" class="selector-item_radio" data-point="{{ $product->weekly_point }}" value="{{ $product->weekly_price }}">
                                      <label for="radio2" class="selector-item_label">
                                        <h2>Weekly</h2>
                                        <p class="text-left customeText">{{ $product->weekly_price }}</p>
                                      </label>
                                      <input type="radio" id="radio3" data-point="{{ $product->monthly_point }}" name="selector" class="selector-item_radio" value="{{ $product->monthly_price }}">
                                      <label for="radio3" class="selector-item_label">
                                        <h2>Monthly</h2>
                                        <p class="text-left customeText">{{ $product->monthly_price }}</p>
                                      </label>
                                      <input type="hidden" id="hiddenInput" name="selector" class="selector-item_radio">
                                    </div>
                                  </div>





                            </div>
                            <div class="col-md-2">

                                <div
                                    style="    width: 100%;
                                    display: flex;
                                    justify-content: space-between;
                                    flex-direction: column;
                                    align-items: center;
                                    height: 100%;">

                                    <img src="{{asset('storage/'.$product->product_image)}}" class="w-100" alt="..." height="auto">
                                    <label for="" class="color-white p">Quantity</label>

                                    <div style="display: flex; align-items: center; justify-content:center; width:100%">
                                        <div style="margin-bottom: 5%;" class="circle-icon bg-white text-black d-flex align-items-center justify-content-center icon">
                                          <i class="fas fa-plus"></i>
                                        </div>
                                        <div style="margin-bottom: 5%;" class="text-white">
                                          <label id="counter" class="color-white display-6">1</label>
                                        </div>
                                        <div style="margin-bottom: 5%;" class="circle-icon bg-white text-black d-flex align-items-center justify-content-center icon">
                                          <i class="fas fa-minus"></i>
                                        </div>
                                      </div>
                                    <label  class="color-white p">Point</label>
                                    <label  class="color-white p" id="Point"> {{$product->one_time_point}}
                                        <p class="text-center customeText"></p>
                                    </label>
                                    <label  class="color-white p" >Price</label>

                                    <label  class="color-white display-6" id="price"> {{$product->one_time_price}}
                                        <p class="text-center customeText"></p>
                                    </label>

                                    <a href="{{ route('gift') }}" class="btn card-btn"
                                        style="background: white; border-radius: 10px;width: 90%;"> Continue </a>

                                </div>

                            </div>




                        </div>
                    </div>








    </section>
    <script>
        // Get the counter element
        var counterElement = document.getElementById("counter");
var priceLabel = document.getElementById("price");
var dataPointLabel = document.getElementById("Point");
var radioButtons = document.querySelectorAll(".selector-item_radio");

// Initial counter value
var counter = 1;

// Function to update the price and point values
function updateValues() {
  var selectedRadioButton = document.querySelector('input[name="selector"]:checked');
  var selectedValue = selectedRadioButton.value;
  var selectedDataPoint = selectedRadioButton.getAttribute("data-point");
  var totalPrice = selectedValue * counter;
  var totalPoint = selectedDataPoint * counter;
  
  priceLabel.textContent = totalPrice;
  dataPointLabel.textContent = totalPoint;
}

// Function to increment the counter value
function incrementCounter() {
  counter++;
  counterElement.textContent = counter;
  updateValues();
}

// Function to decrement the counter value
function decrementCounter() {
  if (counter > 1) {
    counter--;
    counterElement.textContent = counter;
    updateValues();
  }
}

// Add event listeners to the plus and minus icons
var plusIcon = document.querySelector(".fa-plus");
var minusIcon = document.querySelector(".fa-minus");

plusIcon.addEventListener("click", incrementCounter);
minusIcon.addEventListener("click", decrementCounter);

// Function to handle radio button change event
function handleRadioButtonChange() {
  updateValues();
}

// Add event listener to each radio button
radioButtons.forEach(function (radioButton) {
  radioButton.addEventListener("change", handleRadioButtonChange);
});

// Update initial values
updateValues();

  // Add event listener to each radio button
 
      </script>
@endsection
