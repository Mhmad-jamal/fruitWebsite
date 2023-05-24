@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="row d-none">
          <div class="col">
            <h1 class="Title">Article</h1>
          </div>
        </div>
        <div class="row">
          <div class="col" id="article-subject">
            <h1 id="Article-Title">Title</h1>
            <p id="Article-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quibusdam quaerat doloribus eaque, dolorem similique, natus molestiae quasi laudantium harum cum illo vitae enim blanditiis ex pariatur minus in ducimus?
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam, reprehenderit. Consequuntur sapiente reprehenderit fugiat voluptatum quidem. Possimus nostrum blanditiis modi, voluptates quos architecto rem. Officiis optio deserunt eius quas quod?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, quod perspiciatis. Quasi soluta impedit et quibusdam, at, explicabo expedita laborum voluptas exercitationem illum modi quae possimus voluptates sed quas? Blanditiis?
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius dolorem nisi est aliquam eveniet iusto incidunt optio, commodi quaerat porro nulla ratione, amet tempora consequuntur nostrum ducimus? Quaerat, odio minus!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laborum animi dolore. Molestiae, praesentium, corporis obcaecati ipsa culpa numquam totam explicabo repudiandae nihil dolorum at excepturi, quae voluptates magnam perspiciatis.
            </p>
            <div class="row mt-5">
                <div class="col d-flex justify-content-end">
                    <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article"  alt="Card image cap">
    
                </div>
            </div>
          </div>
          
        </div>
      
      </div>
      <div class="col-md-4" id="MoreArticle">
        <div class="row d-none">
            <div class="col">
                <h1 class="Title">Subject </h1>

            </div>
        </div>
     <div class="row mb-3">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <div class="card-text overflow-hidden" style="max-height: 4.5em;">
                    <p class="mb-0">
                      Some quick example tesssssssssssssssssssssssssssssssxt to build on the card title and make up the bulk of the card's content.
                    </p>
                  </div>
                  <a href="#" class="">Read More</a>
                </div>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article" alt="Card image cap">
              </div>
              
        </div>
     </div>
     <div class="row mb-3">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <div class="card-text overflow-hidden" style="max-height: 4.5em;">
                    <p class="mb-0">
                      Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                  </div>
                  <a href="#" class="">Read More</a>
                </div>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article" alt="Card image cap">
              </div>
              
        </div>
     </div>
     <div class="row mb-3">
        <div class="col d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <div class="card-text overflow-hidden" style="max-height: 4.5em;">
                    <p class="mb-0">
                      Some quick example text to build on the card title and make up the bulk of the card's content.
                    </p>
                  </div>
                  <a href="#" class="">Read More</a>
                </div>
                <img src="{{ asset('user/main-img/Cherry.png') }}" class="card-img-top-Article" alt="Card image cap">
              </div>
              
        </div>
     </div>

      </div>
    </div>
  </div>
  
@endsection