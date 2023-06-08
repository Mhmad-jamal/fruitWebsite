@extends('layouts.app')

@section('content')

<section class="container-fluid d-flex justify-content-center mb-3  flex-column" id="customediv">
<div class="row mb-5">
    <div class="col-md-4 d-flex justify-content-center align-items-center">
        <div class="circle-container">
            <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-1024.png" alt="Image">
          </div>
    </div>
    <div class="col-md-4">
        <img  src="http://127.0.0.1:8000/user/main-img/Main_IMG.png" alt="..." class="img">

    </div>
    <div class="col-md-4 d-flex align-items-center">
        <div class="col-md-8" id="right_div">
            Hey Mhmad
        </div>

    </div>
</div>
    <div class="row" id="customRow">

              <div class="col-md-4 d-flex justify-content-center flex-column">
                  <div class="test rounded-circle">
                    <span class="circle-number">2</span>
                  </div>
                  <div class="h5 text-center">
                    Weekly basket
                  </div>
                </div>
              <div class="col-md-4 d-flex justify-content-center flex-column">
                  <div class="test rounded-circle">
                    <span class="circle-number">2</span>
                  </div>
                  <div class="h5 text-center">
                    Monthly basket
                  </div>
                </div>
              <div class="col-md-4 d-flex justify-content-center flex-column">
                  <div class="test rounded-circle">
                    <span class="circle-number">2</span>
                  </div>
                  <div class="h5 text-center">
                    Yearly basket
                  </div>
                </div>
                
             
            
             

            
           
       
      </div>

</section>


@endsection

