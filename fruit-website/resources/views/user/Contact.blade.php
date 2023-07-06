{{-- <form action="{{route('payment.create')}}" method="POST">
    @csrf
<input type="text" name="id" value="HHHHH">
<button type="submit">Click</button>
</form> --}}
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('user/css/contact.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <section class="container-fluid d-flex justify-content-center mb-3 " id="customediv">

        <div class="row" id="customRow">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="circle-container d-flex justify-content-start">
                        <h1 class="display- font-weight-bold">Contact Us</h1>
                    </div>
                </div>
            </div>
            <form action="{{route('contact.create')}}" method="POST">
@csrf
            <div class="col-sm-12 p-3" id="leftcol">
                <div class="row" id="ContainerRow" >
                    <div class="col-md-8">
                        <h1 class="text-white" style="padding: 19px;">
                            Drop a Message
                        </h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="text-white">Full name</label>
                                        <input type="text" name="name" class="form-control ">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-white">Phone Number</label>
                                        <input type="phone" name="phone_number" class="form-control ">
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="text-white">Email</label>
                                        <input type="text" name="email" class="form-control ">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-white"> Subject</label>
                                        <input type="text" name="subject"  class="form-control ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-4">
                                <label class="text-white"> Message</label>

                                <textarea name="message" class="form-control"></textarea>

                            </div>
                            
                            <div class="col-md-12 mt-4 d-flex justify-content-end p-3">
                                <button id="paymentbtn" type="submit" class="w-30  p-2">Send Message</button>

                            </div>
                        
                        </div>
                    </div>
                </form>
                    <div class="col-md-4" id="rightDiv">
                        <div class="row">
                            <div class="col-md-12 p-4">
                                <h2>
                                    Contact Information
                                </h2>
                            </div>
                            <div class="col-md-12 mt-4">
                                <i class="fas fa-map-marker-alt"></i>
                                <span class="customeColor"> location here</span>

                            </div>
                            
                            <div class="col-md-12 mt-4">
                                <i class="fas fa-phone"></i>
                                <span class="customeColor"> Phone here</span>

                            </div>
                            <div class="col-md-12 mt-4">
                                <i class="fas fa-globe"></i>
                                <span class="customeColor"><a href="https://fruish.ca">www.fruish.ca </a></span>

                            </div>
                            <div class="col-md-12 mt-4">
                                <i class="fab fa-facebook" style="color: blue;"></i>
                                <i class="fab fa-instagram" style="color: red;"></i>
                                <i class="fab fa-whatsapp" style="color: green;"></i>
                            </div>
                            


                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if (Session::has('success'))
<script>
  document.addEventListener('DOMContentLoaded', function() {
  // SweetAlert code here
  swal("Message Send Successfully!", "", "success")
   
});

 
</script>
@endif

@if (Session::has('error'))
<script>
  swal("Please fill all field  !", "Error", "Error");
 
 </script>
 @endif   
@endsection
