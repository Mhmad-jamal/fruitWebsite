@extends('layouts.app')

@section('content')

<div class="container-fluid mt-4" id="ContainerSection">
    <div class="row d-flex justify-content-center" id="ImgCenter">

        <div class="col-md-8 d-flex justify-content-center">
            <img class="img-fluid w-50"  id="left-img" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">
    
    
        </div>
    </div>
    <div class="row">
      <div class="col text-center">
        <div class="circle ">
          <span>Out from</span>
          <span class="store">Store</span>
          <span>12/12/2022</span>

        </div>
      </div>
      <div class="col-3 text-center customeDiv">
        <div id="line1" class="line"></div>
      </div>
      <div class="col text-center">
        <div class="circle delevry ">
            <span>With The</span>
            <span class="store">Delivery</span>
            <span>12/12/2022</span>
  
          </div>
      </div>
      <div class="col-3 text-center customeDiv">
        <div class="line" id="line2"></div>
      </div>
      <div class="col text-center">
        <div class="circle completed ">
            <span>Basket</span>
            <span class="store">Deleivered</span>
            <span>12/12/2022</span>
  
          </div>
      </div>
    </div>
  </div>
@endsection