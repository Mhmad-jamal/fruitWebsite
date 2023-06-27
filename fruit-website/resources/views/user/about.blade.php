@extends('layouts.app')

@section('content')

<div class="clear"></div>
<!--end header -->
<!-- start all contant -->
<div class="con">
   <!-- start about me -->
   <section class="about">
       <div class="container">
         <h1>About Us</h1>
       </div>
   </section>
   <!-- end about me -->
   <!--start the two slide contant -->
<section class="slide">
   <div class="container">


       <div class="con2">
               <!-- start slide 1 -->
               <div class="secDiv1">
                   <div class="image">
                    <img class="rounded-circle" alt="avatar1" src="{{asset('storage/'.$about->image)}}" />
                </div>
                   <div class="inf">
                  <div class="row" id="customrow">
                  
                    <div class="col-md-12 text-center">
                        <h1>{{$about->first_section_first}}</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <h1>{{$about->first_section_secound}}</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <h1>{{$about->first_section_third}}</h1>
                    </div>
                  </div>
                  
                   </div>
               </div>
             <!-- end slide 1 -->
             <!-- start img for slide 1-->
               <div class="imageS1">
            </div>
             <!-- end img for slide 1-->
           <div class="secDiv2">
                  <h2>{{$about->title}}</h2>
                  <div class="divv">{{$about->sub_title}}</div>
                 <p> {{$about->description}}</p>
               <div class="inf2">
                   <div>
{{
    $about->secound_section_first
}}                        
                   </div>
                     
                   <div>
                        {{$about->secound_section_second}}
                   </div>
                     
                   <div>
                    {{$about->secound_section_last}}
                   </div>
               </div>
           </div>
       
       </div>
   </div>
</section>


@endsection

