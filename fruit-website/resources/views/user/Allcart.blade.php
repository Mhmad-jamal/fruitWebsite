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
<div class="container" id="container">
 
    @foreach ($cart as $item )
    <div class="row justify-content-center mt-3 bg-white">
        <div class="col-md-4 mt-5 d-flex justify-content-center">
            <img src="{{asset('storage/'.$item->product_image)}}" alt="Image 3"  class="img-fluid " style="height: 150px">
        </div>
        <div class="col-md-4 discriptiondiv" >
            <h1>{{$item->product_name}}</h1>
            <p>{{$item->product_details}}</p>
            <h1>{{$item->plan}}</h1>
            <p> Quantity :{{$item->quantity}}</p>

        </div>
        <div class="col-md-4"></div>
        <div class="row mb-3">
            <div class="col-md-4"></div> 
            <div class="col-md-4  discriptiondiv"><p class="mt-1">{{$item->product_contain}}</p></div>     
        
            <div class="col-md-4 discriptiondiv " id="Discription"><p class="mt-1">At {{($item->created_at)->format('Y-m-d');}}</p>
                <h4 class="mt-1">{{$item->total_price}}</h4>
                <a href="{{ route('delete.cart', ['id' => $item->id]) }}" class="btn btn-danger">
                <i class="fas fa-trash-alt" style="color: white"></i> 
                      </a>
              
            </div>     
        
        </div>
    </div>
    @endforeach
    
    @foreach ($gift as $item )
    <div class="row justify-content-center mt-3 bg-white">
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
                <h4 class="mt-1">{{$item->price}}</h4>
                <a href="{{ route('delete.gift', ['id' => $item->id]) }}" class="btn btn-danger">
                <i class="fas fa-trash-alt" style="color: white"></i> 
                      </a>
              
            </div>     
        
        </div>
    </div>
    @endforeach

    <div class="row mt-3">
        <div class="col-md-12 d-flex justify-content-center"> <a href="#" class="btn card-btn" style="background: white; border-radius: 10px;width: 100%; color:#8b48e5;font-size:2rem;">    Payment </a></div>
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
@endsection

