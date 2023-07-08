@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<form action="{{ route('posts.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
<input type="hidden" value="{{$article->id}}" name="id">
<div class="row d-flex justify-content-center">
   
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Edit Article</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname"> Title</label>
                <div class="input-group input-group-merge">
                    

                    <input disabled type="text" value="{{$article->title}}" class="form-control" required name="title" id="basic-icon-default-fullname"
                        placeholder="" value="" aria-label="title" aria-describedby="basic-icon-default-fullname2">
                </div>
            
                    <div>
            <label for="" class="form-label">Short Description </label>
            <textarea disabled class="form-control"  name="short_description" id="short_description" required>{{$article->short_description}}</textarea>
        </div>
        <div>
            <label for="" class="form-label"> content </label>
            <textarea disabled class="form-control"  name="content" id="content" required>{{$article->content}}</textarea>
        </div>  
                
            </div>
           
          <div class="row">
            <div class="col-md-6">
                
            
            </div>
          
          </div>
          <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <img class="img-thumbnail" src="{{asset('storage/'.$article->image)}}">
                  </div>
            </div>
          </div>
           
            
        
        </div>
      </div>
    </div>
  </div>    

@endsection
