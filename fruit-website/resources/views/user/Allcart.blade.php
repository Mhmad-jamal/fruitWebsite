@extends('layouts.app')

@section('content')
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<div class="row mb-3">
    <div class="col-md-12">
        <div class="circle-container d-flex justify-content-start">
            <h1 id="title" class="display- font-weight-bold"> Cart </h1>
        </div>
    </div>
</div>
<?php $total = 0; ?>
<div class="container" id="container">
 
    @foreach ($cart as $value )
<?php $total+=$value->total_price?>
    <div class="row justify-content-center mt-3 bg-white order ">
        <div class="col-md-4 mt-5 d-flex justify-content-center">
            <img src="{{asset('storage/'.$value->product_image)}}" alt="Image 3"  class="img-fluid " style="height: 150px">
        </div>
        <div class="col-md-4 discriptiondiv" >
            <input type="hidden" name="price" value="{{$value->total_price}}">
            <input type="hidden" name="quantit" value="{{$value->quantity}}">
            <input type="hidden" name="plan" value="{{$value->plan}}">
            <input type="hidden" name="product_id" value="{{$value->product_id}}">
            <input type="hidden" name="type" value="product">

            <h1>{{$value->product_name}}</h1>
            <p>{{$value->product_details}}</p>
            <h1>{{$value->plan}}</h1>
            <p> Quantity :{{$value->quantity}}</p>

        </div>
        <div class="col-md-4"></div>
        <div class="row mb-3">
            <div class="col-md-4"></div> 
            <div class="col-md-4  discriptiondiv"><p class="mt-1">{{$value->product_contain}}</p></div>     
        
            <div class="col-md-4 discriptiondiv " id="Discription"><p class="mt-1">At {{($value->created_at)->format('Y-m-d');}}</p>
                <h4 class="mt-1">{{$value->total_price}} $</h4>
                <a href="{{ route('delete.cart', ['id' => $value->id]) }}" class="btn btn-danger">
                <i class="fas fa-trash-alt" style="color: white"></i> 
                      </a>
              
            </div>     
        
        </div>
    </div>
    @endforeach
    
    @foreach ($gift as $item )
    <?php $total+=$item->price?>

    <div class="row justify-content-center mt-3 bg-white order">
        <input type="hidden" name="price" value="{{$item->price}}">
        <input type="hidden" name="price" value="{{$item->total_price}}">
        <input type="hidden" name="quantit" value="1">
        <input type="hidden" name="type" value="gift">

        <input type="hidden" name="plan" value="gift">
        <input type="hidden" name="product_id" value="{{$item->gift_id}}">
        <div class="col-md-4 mt-5 d-flex justify-content-center">
            <img src="{{asset('storage/'.$item->image)}}" alt="Image 3"  class="img-fluid " style="height: 150px">
        </div>
        <div class="col-md-4 discriptiondiv" >
            <h1>{{$item->name}}</h1>
            <p> Quantity :1</p>

        </div>
        <div class="col-md-4"></div>
        <div class="row mb-3">
            <div class="col-md-8"></div> 
        
            <div class="col-md-4 discriptiondiv " id="Discription"><p class="mt-1">At {{($item->created_at)->format('Y-m-d');}}</p>
                <h4 class="mt-1">{{$item->price}} $</h4>
                <a href="{{ route('delete.gift', ['id' => $item->id]) }}" class="btn btn-danger">
                <i class="fas fa-trash-alt" style="color: white"></i> 
                      </a>
              
            </div>     
        
        </div>
    </div>
    @endforeach

 @csrf
       <div class="row mt-3">
        <div class="col-md-8 d-flex justify-content-center"> <button id="submitbtn" class="btn card-btn" style="background: white; border-radius: 10px;width: 100%; color:#8b48e5;font-size:2rem;">    Payment </button></div>
            <div class="col-md-4 d-flex justify-content-center"> <h5 class="btn card-btn" style="background: white; border-radius: 10px;width: 100%; color:#8b48e5;font-size:2rem;">    Total Price : {{$total}} $ </h5></div>

    </div>

      
       
  
</div>
<br>

</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (Session::has('success'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
  // SweetAlert code here
  swal("Delete Cart Successfully!", "", "success")



});

 
</script>

@endif
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
<script>
 $(document).ready(function() {
    let submitbtn=document.getElementById("submitbtn");
    submitbtn.addEventListener('click', function() {

    var orderData = [];

    $('.order').each(function() {
        var priceInput = $(this).find('input[name="price"]');
        var product_id = $(this).find('input[name="product_id"]');
        var plan = $(this).find('input[name="plan"]');
        var quantity = $(this).find('input[name="quantit"]');
        var type = $(this).find('input[name="type"]');

        if (priceInput.length > 0) {
            var priceValue = priceInput.val();
            var productIdValue = product_id.val();
            var planValue = plan.val();
            var quantityValue = quantity.val();
            var type = type.val();

            var order = {
                price: priceValue,
                product_id: productIdValue,
                plan: planValue,
                quantity: quantityValue,
                type:type,
            };

            orderData.push(order);
        }
    });


    // Send orderData array to the controller using AJAX
    $.ajax({
    url: '/api/addorder', // Update the URL to match your route
    type: 'POST',
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
        orders: orderData
    },
    success: function(response) {
        console.log(response);
   },
    error: function() {
        console.log('Error occurred while sending the data.');
    }
}); 
    });
});


</script>
@endsection

