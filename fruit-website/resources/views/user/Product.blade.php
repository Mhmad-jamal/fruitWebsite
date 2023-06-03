@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('user/css/product.css') }}">

<section class="container-fluid d-flex justify-content-center mb-3 " id="customediv">

    <div class="row" id="customRow">
        <div class="col-sm-8" id="leftcol">
<div class="row">
  <div class="col-md-9">
  <div class="row">
    <div class="col-md-12 text-white " id="desctiption">desctiption</div>
   

  </div>
  <div class="row" id="ContainerRow">
    <div class="col-md-4 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio1" name="selector" class="selector-item_radio" checked>
        <label for="radio1" class="selector-item_label">  
          <h2>One Time</h2>
          <p class="text-center customeText">$6</p>
      </label>
    </div>
    </div>
    <div class="col-md-4 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio2" name="selector" class="selector-item_radio">
        <label for="radio2" class="selector-item_label">   <h2>Weekly</h2>
          <p class="text-center customeText">$6</p></label>
    </div>
    </div>
    <div class="col-md-4 text-center customeText">
      <div class="selecotr-item">
        <input type="radio" id="radio3" name="selector" class="selector-item_radio">
        <label for="radio3" class="selector-item_label">   <h2>Monthly</h2>
          <p class="text-center customeText">$6</p></label>
    </div>
    </div>
   
  </div>
  
  </div>

  <div class="col-md-3" id="imgContainer">
    <img src="{{asset('user/main-img/Main_IMG.png')}}" alt="..." class="img-thumbnail">

  </div>
</div>


        </div>
        <div class="col-sm-4">col-sm-4</div>
      </div>

</section>


@endsection

