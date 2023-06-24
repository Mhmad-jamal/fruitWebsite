@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-10" id="titlediv"> 
               <h1 id="title" class="display- font-weight-bold"> Gift </h1>
  </div>
  <div class="col-md-2" id="imgContainer">
    <img src="http://127.0.0.1:8000/user/main-img/Group-43.png" alt="Image 3" style="max-width: 35%" class="img-fluid ">
  </div>
</div>
<div class="container" id="container">
 
    <div class="row justify-content-around mt-3">
     @foreach ($gifts as $gift )
     <div class="col-md-3">
      <form action="{{route('cart.gift.create')}}" method="POST">
    @csrf
      <div class="card align-items-center" style="width: 18rem;">
          <img src="http://127.0.0.1:8000/user/main-img/Group-53.png" class="card-img-top " style="max-width: 25%" alt="...">
          <div class="card-body text-center">
           <input type="hidden" name="gift_id" value="{{$gift->id}}">
           <input type="hidden" name="price" value="{{$gift->price}}">

             <h5 class="card-title">{{$gift->name}}</h5>
            <p class="card-text">{{$gift->price}} $</p>

            <div style=" margin-bottom: 5%;" class="circle-icon bg-white text-black d-flex align-items-center justify-content-center icon">
              <button type="submit" style="border: none; background: none; padding: 0;">
                <i class="fas fa-plus"></i>
              </button>
          </div>
                    
          </div>
        </div>
      </form>
  </div>

     @endforeach
     <br>
    </div>
     <div class="row mt-3">
      <div class="col-md-4"><img src="http://127.0.0.1:8000/user/main-img/Group-44.png" id="img" alt="Image 3" class="img-fluid customDivimage"></div>
      <div class="col-md-6"></div>
      <div class="col-md-2" id="btndiv"><a href="{{route('Allcart')}}" class="btn card-btn" style="background: white; border-radius: 10px;width: 90%;">    Continue </a></div>
    </div>

</div>
<br>
<br>

</div>


@endsection
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (Session::has('success'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
  // SweetAlert code here
  swal("Gift Added To Cart Successfully!", "", "success")
   
});

 
</script>
@endif

@if (Session::has('error'))
<script>
  swal("Sorry something wrong !", "", "erkror");
 
 </script>
    
@endif