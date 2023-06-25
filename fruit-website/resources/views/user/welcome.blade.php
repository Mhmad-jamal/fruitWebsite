@extends('layouts.app')

@section('content')
    <section class="hero container-fliud">

      <img class="img-fluid" id="left-img" src="{{ asset('user/main-img/Main_IMG.png') }}" alt="">

      <div id="TextDiv">
        <h1 class="display-4" id="Main-title">
            <span>{{$Category[0]->category_name}}</span>
            <br>Live Your Healthy Life
        </h1>
        <p id="TextDivP" class="display-9" style="max-height: 6em; overflow: hidden; text-overflow: ellipsis;">
            {{$Category[0]->category_description}}
        </p>
        <a href="{{route('Store')}}"><button id="orderbtn">Order Now</button></a>
    </div>
    
    
    </section>
    <section class="container mt-5 ">

        <div class="row pt-3 pb-3">
            <div class="col d-flex flex-wrap justify-content-center">
             
              @for ($i = 0; $i < $products->count(); $i++)
              @if ($i < 3)
                  <div class="card text-center mb-3 ml-3" style="width: 18rem;">
                      <img class="card-img-top" style="height: 180px;" src="{{ asset('storage/'.$products[$i]->product_image) }}" alt="Card image cap">
                      <div class="card-body">
                          <h5 class="card-title text-center">{{ $products[$i]->product_name }}</h5>
                          <p class="card-text text-center truncate-lines" style="height: 221px;">
                            {{ $products[$i]->product_details }}
                        </p>                          <a href="{{ route('product', ['id' => $products[$i]->id]) }}" class="btn card-btn">Buy Now</a>
                      </div>
                  </div>
              @endif
          @endfor
          

          
    </section>
    <section class="container-fluid mt-3" id="section3">
        <div class="row justify-content-center " style="padding: 10% 0 ;">
          @if (isset($products[3]))
<a href="{{ route('product', ['id' => $products[3]->id]) }} " style="text-decoration: none ;color: #b589f1;">
            <div class="col-4 d-flex justify-content-center  flex-column">
                <div class="d-flex justify-content-end  flex-column "> <img class="img-fluid custom-width mx-auto" id=""
                        src="{{ asset('storage/'.$products[3]->product_image)}}" alt="">
                        <h2 class="text-center">{{$products[3]->product_name}}</h2>
                    <p class="text-justify customP text-center ">
                      {{$products[3]->product_details}}</p>

                </div>
              </a>
                @endif
                @if (isset($products[4]))
                <a href="{{ route('product', ['id' => $products[4]->id]) }} " style="text-decoration: none ;color: #b589f1;">

                <div class=" d-flex justify-content-end flex-column CenterFristCol "> <img class="img-fluid custom-width mx-auto" id=""
                        src="{{ asset('storage/'.$products[4]->product_image)}}" alt="">
                        <h2 class="text-center">{{$products[4]->product_name}}</h2>

                    <p class="text-justify customP text-center">
                        {{$products[4]->product_details}}</p>

                </div>
                </a>
@endif
@if (isset($products[5]))
<a href="{{ route('product', ['id' => $products[5]->id]) }} " style="text-decoration: none ;color: #b589f1;">

                <div class=" d-flex justify-content-end flex-column "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('storage/'.$products[5]->product_image)}}" alt="">
                    <h2 class="text-center">{{$products[5]->product_name}}</h2>

                    <p class="text-justify customP text-center">
                        {{$products[5]->product_details}}</p>

                </div>
</a>
            @endif
          </div>

            <div class="col-3 d-flex justify-content-center align-items-center  ">
                <img class="img-fluid max-width-100" style="height: fit-content" id="Center-img"
                    src="{{ asset('user/main-img/Fruit-Box.png') }}" alt="">


            </div>
            <div class="col-4 d-flex justify-content-center flex-column ">
              @if (isset($products[6]))
              <a href="{{ route('product', ['id' => $products[6]->id]) }} " style="text-decoration: none ;color: #b589f1;">

                <div class=" d-flex justify-content-end flex-column  "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('storage/'.$products[6]->product_image)}}" alt="">
                    <h2 class="text-center">{{$products[6]->product_name}}</h2>

                    <p class="text-justify customP text-center">
                        {{$products[6]->product_details}}</p>

                </div>
              </a>
                @endif
                @if (isset($products[7]))
                <a href="{{ route('product', ['id' => $products[7]->id]) }} " style="text-decoration: none ;color: #b589f1;">

                <div class=" d-flex justify-content-end flex-column  CenterFristCol-right"> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('storage/'.$products[7]->product_image)}}" alt="">
                    <h2 class="text-center">{{$products[7]->product_name}}</h2>

                    <p class="text-justify customP text-center">
                        {{$products[7]->product_details}}</p>

                </div>
                </a>
@endif
@if (isset($products[8]))
<a href="{{ route('product', ['id' => $products[8]->id]) }} " style="text-decoration: none ;color: #b589f1;">

                <div class=" d-flex justify-content-end flex-column  "> 
                    <img class="img-fluid custom-width mx-auto" src="{{ asset('storage/'.$products[8]->product_image)}}" alt="">
                    <h2 class="text-center">{{$products[8]->product_name}}</h2>

                    <p class="text-justify customP text-center" style="max-height: 3em; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                      {{ $products[8]->product_details }}
                  </p>
                                    </p>

                </div>
          </a>
@endif
</div>


    </section>


    <section class="container">
<div class="row" >
    <div class="col">
<h2 class="div-title">{{$Category[1]->category_name}}</h2>
<p class="div-paragraph">{{$Category[1]->category_description}}</p>

        </div>
<div class="col">
    <img  src="{{ asset('user/main-img/Group-44.png') }}" alt="Image 3" class="img-fluid customDivimage">
    <img src="{{ asset('user/main-img/Group-43.png') }}" alt="Image 3" class="img-fluid ">
    <img src="{{ asset('user/main-img/Group-25.png') }}" alt="Image 3" class="img-fluid customDivimage">


</div>
</div>
    </section>

    <section class="container-fluid mt-3" id="Section-5">
        <div class="row" id="seciotn-5-row">
            <div class="col p-div">
        <h2 class="div-title ">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
        <h4 class="div-secount-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>

        <p class="div-paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iste similique esse sapiente ullam repellendus soluta odit, quae veniam culpa magnam aliquam cumque architecto dolorem magni debitis libero incidunt inventore sunt?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non provident sapiente deserunt reprehenderit quidem culpa unde cum laudantium blanditiis. Amet sit ratione saepe alias in rem asperiores reiciendis. Sequi, eum.lor Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias accusantium quam perspiciatis? Eius velit eos mollitia laboriosam aut tempore aliquid perspiciatis facere ad, hic expedita culpa ducimus atque vitae totam!</p>
        <button id="explore-btn">Explore</button>

                </div>
                <div class="col p-div d-inline-flex">
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-53.png') }}" alt="Image 1" id="KidsImg" class="img-fluid">
                      <h5 class="custome-desctiption-img text-center">Kids</h5>
                      </div>
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-52.png') }}" alt="Image 2" class="img-fluid">
                        <h5 class="custome-desctiption-img text-center">Mother</h5>

                      </div>
                      <div class="col">
                        <img src="{{ asset('user/main-img/Group-51.png') }}" alt="Image 3" class="img-fluid">
                        <h5 class="custome-desctiption-img text-center">Athlitics</h5>

                      </div>
                 
                  </div>
                  
        </div>

    </section>
<section class="container">
 
<div class="row mb-3">
  <div class="col-12  text-center div-title">Article Section</div>
</div>

<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active carousel-item-start">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item carousel-item-next carousel-item-start">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 article">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>

          <div class="col-lg-4 article d-none d-lg-block">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>

          <div class="col-lg-4 article d-none d-lg-block">
            <div class="card text-center mb-3 ml-3 articleCard" id="CenterdArticleCard" style="width: 18rem;">
 
              <div class="inline-elements d-flex justify-content-beteween" >
                <h5>Article</h5>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
              </div>
                  <div class="card-body">
                    <p class="card-text articleP">Some quick example text to build on the Article and make up the bulk of the card's content Some quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the cardSome quick example text to build on the Article and make up the bulk of the card.</p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
   
  </div>
  <!-- Inner -->
</div>

</section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>



<section class="container-fluid" id="Section-6">
  <div class="row">
    <div class="col-12 ">
      <h2 class="div-title text-center mb-3">Customer Rating</h2>
    </div>
  </div>
 <!-- Carousel wrapper -->
 


<div id="carouselMultiItemExample2" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
  <!-- Controls -->
  <div class="d-flex justify-content-center mb-4">
    <button class="carousel-control-prev position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next position-relative" type="button"
      data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Inner -->
  <div class="carousel-inner py-4">
    <!-- Single item -->
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Anna Deynah</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">John Doe</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Maria Kate</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(3).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">John Doe</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Alex Rey</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(5).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Maria Kate</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(6).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Anna Deynah</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
              officiis hic tenetur quae quaerat ad velit ab hic tenetur.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(8).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">John Doe</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
              suscipit laboriosam, nisi ut aliquid commodi.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li>
                <i class="fas fa-star-half-alt fa-sm"></i>
              </li>
            </ul>
          </div>

          <div class="col-lg-4 d-none d-lg-block">
            <img class="rounded-circle shadow-1-strong mb-4"
              src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(7).webp" alt="avatar"
              style="width: 150px;" />
            <h5 class="mb-3 card-title text-center">Maria Kate</h5>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque corrupti.
            </p>
            <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="fas fa-star fa-sm"></i></li>
              <li><i class="far fa-star fa-sm"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
</section>


@endsection
