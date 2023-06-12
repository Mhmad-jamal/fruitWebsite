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
            <h1 id="title" class="display- font-weight-bold">  Basket details</h1>
          </div>
        </div>
      </div>
        <div class="col-sm-12" id="leftcol">
<div class="row">
  <div class="col-md-12">
 
  <div class="row" id="ContainerRow">
    <div class="col-md-4 text-center customeText">
      <div class="container">
        <h1 class="display-4">Title</h1>
        <p  class="lead text-left description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt odio id lorem ultrices, vitae semper nunc facilisis.</p>
      </div>
      
    </div>
    <div class="col-md-5 d-flex  customeText flex-column">
      <div class="col"> <h1 class="display-4">Contain</h1>
      </div>
      <div class="col text-left" id="content">
        <div class="row">
          <div class="col-3 text-left">
            <ul class="list-unstyled">
              <li>Item 1</li>
              <li>Item 2</li>
              <li>Item 3</li>
              <!-- Add more list items here -->
            </ul>
          </div>
          <div class="col-3 text-left">
            <ul class="list-unstyled">
              <li>Item 4</li>
              <li>Item 5</li>
              <li>Item 6</li>
              <!-- Add more list items here -->
            </ul>
          </div>
          <!-- Add more columns here -->
        </div>
        
      </div>
      <div class="col">
        <div class="selecotr-item">
          <input type="radio" id="radio1" name="selector" class="selector-item_radio" checked>
          <label for="radio1" class="selector-item_label">  
            <h2>One Time</h2>
            <p class="text-center customeText"></p>
        </label>
        <input type="radio" id="radio2" name="selector" class="selector-item_radio">
        <label for="radio2" class="selector-item_label">   <h2>Weekly</h2>
          <p class="text-center customeText"></p></label>
          <input type="radio" id="radio3" name="selector" class="selector-item_radio">
          <label for="radio3" class="selector-item_label">   <h2>Monthly</h2>
            <p class="text-center customeText"></p></label>
            <input type="hidden" id="radio3" name="selector" class="selector-item_radio">
            <label for="" class="color-white display-4"> 10$
              <p class="text-center customeText"></p></label>
              <div style=" margin-bottom: 7%;" class="circle-icon bg-white text-black d-flex align-items-center justify-content-center icon" >
                <i class="fas fa-plus"></i>
              </div>
              
              <div style="margin-bottom: 7%;" class="circle-icon bg-white text-black d-flex align-items-center justify-content-center icon" >
                <i class="fas fa-minus"></i>
              </div>
              
              
            
      </div>
      </div>
    
     
    </div>
    <div class="col-md-3 d-flex text-center customeText ">
    </div>
   
   
    
   
    </div>
  </div>
  
  


       
       
    

</section>


@endsection

