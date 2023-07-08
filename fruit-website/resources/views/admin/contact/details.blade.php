@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

              <div class="col-sm-12 p-3" id="leftcol">
                    <div class="row" id="ContainerRow">
                        <div class="col-md-8 p-3">
                            <h1 class="text-black" style="padding: 19px;">
                               Message
                            </h1>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-black">Full name</label>
                                            <input type="text" value="{{$message->name}}" name="name" class="form-control ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-black">Phone Number</label>
                                            <input type="phone"  value="{{$message->phone_number}}" name="phone_number" class="form-control ">
                                        </div>
                                    </div>
    
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="text-black">Email</label>
                                            <input type="text" name="email" value="{{$message->email}}" class="form-control ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="text-black"> Subject</label>
                                            <input type="text" name="subject" value="{{$message->subject}}" class="form-control ">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-12 mt-4">
                                    <label class="text-black"> Message</label>
    
                                    <textarea name="message"  class="form-control">
                                        {{$message->message}}
                                    </textarea>
    
                                </div>
                              
                            
                            </div>
                        </div>
                    
   
    
    
                    </div>
                </div></form>
<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
</script>
@endsection
