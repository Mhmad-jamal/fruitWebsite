@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('user/css/product.css') }}">

<section class="container-fluid d-flex justify-content-center mb-3 " id="customediv">

    <div class="row" id="customRow">
        <div class="col-sm-12" id="leftcol">
<div class="row">
  <div class="col-md-11">
  <div class="row">
    <div class="col-md-12 text-white " id="desctiption">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat eum ea maiores eius omnis obcaecati. Odio velit quas libero illo modi ipsum magnam repudiandae, nisi quos cum natus deserunt voluptatem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus culpa inventore obcaecati, et, molestiae dolor nulla ea, necessitatibus expedita tempora soluta illum blanditiis. Itaque tenetur fuga earum inventore beatae cum.lor</div>
   

  </div>
  <div class="row" id="ContainerRow">
    <div class="col-md-3 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio1" name="selector" class="selector-item_radio" checked>
        <label for="radio1" class="selector-item_label">  
          <h2>One Time</h2>
          <p class="text-center customeText">$6</p>
      </label>
    </div>
    </div>
    <div class="col-md-3 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio2" name="selector" class="selector-item_radio">
        <label for="radio2" class="selector-item_label">   <h2>Weekly</h2>
          <p class="text-center customeText">$6</p></label>
    </div>
    </div>
    <div class="col-md-3 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio3" name="selector" class="selector-item_radio">
        <label for="radio3" class="selector-item_label">   <h2>Monthly</h2>
          <p class="text-center customeText">$6</p></label>
    </div>
    </div>
   
    <div class="col-sm-3" id="leftCol">

      <button id="btn">Add To Cart</button>
      <img src="{{asset('user/main-img/Main_IMG.png')}}" alt="..." class="img-thumbnail">

    </div>
   
   
  </div>
  
  </div>

  
</div>


        </div>
       
      </div>

</section>


@endsection

