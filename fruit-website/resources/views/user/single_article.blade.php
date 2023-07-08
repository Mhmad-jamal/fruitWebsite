@extends('layouts.app')

@section('content')
<div class="row mt-5">
  <div class="col-md-8 mt-2">
    <main class="container ">
      <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 fst-italic">{{$article->title}}</h1>
          <p class="lead my-3">{{$article->short_description}}</p>
        </div>
      </div>
    
      <div class="row mb-2">
       
      <div class="col-md-12 text-center">
        <article class="blog-post">
          <p class="blog-post-meta" style="color: #727272">{{$article->created_at->format('Y-m-d')}}</p>
    
          <blockquote>
            <p>{{$article->content}}</p>
          </blockquote>
          <img src="{{asset('storage/'.$article->image)}}" class="img-fluid" alt="Responsive image">

       
    
        </article>
      </div>
      </div>
    
      
      </div>
      <div class="col-md-4">
       @foreach ($lastThreeArticles as $item )
           
       <article class="mt-3">
        <div class="article-wrapper">
          <figure>
            <img src="{{ asset('storage/'.$item->image) }}" alt="" style="width: 300px; height: 200px; object-fit: cover;">
          </figure>
          <div class="article-body">
            <h2>{{ $item->title }}</h2>
            <p>{{ $item->short_description }}</p>
            <a href="{{ Route('single-article', ['id' => $item->id]) }}" class="read-more">
              Read more <span class="sr-only"></span>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
      </article>
@endforeach      

      </div>
    </main>

  </div>
 
</div>
@endsection
