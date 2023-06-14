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
 
    <div class="row justify-content-center mt-3 bg-white">
        <div class="col-md-4">
            <img src="http://127.0.0.1:8000/user/main-img/Group-43.png" alt="Image 3" style="max-width: 35%" class="img-fluid ">
        </div>
        <div class="col-md-4 discriptiondiv" >
            <h1>Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis condimentum malesuada arcu, non luctus nisi convallis non. Quisque vel tortor nec eros luctus gravida id non mauris.</p>
            <h1>weekly</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="row mb-3">
            <div class="col-md-4"></div> 
            <div class="col-md-4  discriptiondiv"><p class="mt-1">Not Yet</p></div>     
        
            <div class="col-md-4 discriptiondiv " id="Discription"><p class="mt-1">at 5/4/2016</p>
                <h4 class="mt-1">10 $</h4>
                <button class="btn btn-danger">
                    <i class="fas fa-trash-alt" style="color: white"></i> 
                  </button>
            </div>     
        
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12 d-flex justify-content-center"> <a href="#" class="btn card-btn" style="background: white; border-radius: 10px;width: 100%; color:#8b48e5;font-size:2rem;">    Payment </a></div>
    </div>

      
       
  
</div>
<br>

</div>


@endsection
