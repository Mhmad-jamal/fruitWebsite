@extends('layouts.app')
@section('content')
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{$article[0]->title}}</h1>
      <p class="lead my-3">{{$article[0]->short_description}}</p>
      <p class="lead mb-0"><a href="{{Route('single-article', ['id' => $article[0]->id])}}" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    @foreach ($article as $index => $item)
  @if ($index > 0)
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">{{$item->title}}</h3>
          <div class="mb-1 text-muted">{{ $item->created_at->format('Y-m-d') }}</div>
          <p class="mb-auto">{{$item->short_description}}</p>
          <a href="{{Route('single-article', ['id' => $item->id])}}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" alt="Background Image" style="height: 300px;">
        </div>
      </div>
    </div>
  @endif
@endforeach

</div>


  
  </div>

</main>
@endsection