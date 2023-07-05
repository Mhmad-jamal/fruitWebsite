{{-- <form action="{{route('payment.create')}}" method="POST">
    @csrf
<input type="text" name="id" value="HHHHH">
<button type="submit">Click</button>
</form> --}}
@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('user/css/payment.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <section class="container-fluid d-flex justify-content-center mb-3 " id="customediv">

        <div class="row" id="customRow">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="circle-container d-flex justify-content-start">
                        <h1 id="title" class="display- font-weight-bold">Payment</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-12" id="leftcol">

                        <div class="row" id="ContainerRow" style="padding: 19px;">
                            <div class="col-md-4">
                                <div class="row">
                            <div class="col-md-12 mt-3">
                                <button id="Cardbtn" class="w-100 p-2">Card</button>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="text-white ">CARD HOLDER NAME</label>
                                <input  type="text" class=" form-control w-100 input" placeholder="john david">

                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="text-white ">CARD NUMBER </label>
                                <input  type="text" class=" form-control w-100 input" placeholder="XXXX XXXX XXXX 1234">

                            </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="row">
                                  
                                    <div class="col-md-6">
                                        <label class="text-white ">EXPIRY DATE </label>
                                        <input  type="text" class=" form-control w-100 input" placeholder="2024 ">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-white ">CVV  </label>
                                        <input  type="text" class=" form-control w-100 input" placeholder="259 ">
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                           
                            <div class="col-md-4 d-flex align-items-center" >
                                <div class="container">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="credit-card">
                                          <div class="card-number p-3">
                                            <span class="masked-number">XXXX XXXX XXXX 1234</span>
                                          </div>
                                          <div class="card-details">
                                            <div class="card-holder">
                                              <span class="label">Card Holder</span>
                                              <span class="value">John Doe</span>
                                            </div>
                                            <div class="expiration-date">
                                              <span class="label">Expiration Date</span>
                                              <span class="value">08/25</span>
                                            </div>
                                            <div class="expiration-date mt-3">
                                                <span class="label">Visa </span>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                            </div>
                           <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12"> <div class="col-md-12 mt-3">
                                    <h1 id="" class=" p-2 text-white">Payment Details </h1>
                                </div></div>
                                <div class="col-md-12">
                                    <h4 class=" p-2 text-white">Total : 500</h4>
                                </div>
                                <div class="col-md-12">
                                    <h4 class=" p-2 text-white">Tax : 0.00</h4>
                                </div>
                                <div class="col-md-12">
                                    <h4 class=" p-2 text-white">Sub Total : 500,00</h4>
                                </div>
                                <div class="col-md-12 mt-3"></div>
                                <button id="paymentbtn" class="w-100 p-2">Continue</button>

                            </div>
                           </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>




@endsection

