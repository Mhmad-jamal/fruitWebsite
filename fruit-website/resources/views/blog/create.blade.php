@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<form action="{{ route('blog.posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row d-flex justify-content-center">
   
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Add New Article</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname"> Title</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                       
                    </span>

                    <input type="text" class="form-control" required name="title" id="basic-icon-default-fullname"
                        placeholder="" value="" aria-label="title" aria-describedby="basic-icon-default-fullname2">
                </div>
            
                    <div>
            <label for="" class="form-label">Short Description </label>
            <textarea class="form-control" name="short_description" id="short_description" required>{{ old('short_description') }}</textarea>
        </div>
        <div>
            <label for="" class="form-label"> content </label>
            <textarea class="form-control" name="content" id="content" required>{{ old('content') }}</textarea>
        </div>  
                
            </div>
           
            
         
        
          <div class="row">
            <div class="col-md-6">
                
            
            </div>
          
          </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email"> Image</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zM5 19V5h14l.002 14H5z">
                            </path>
                            <path d="m10 14-1-1-3 4h12l-5-7z"></path>
                        </svg>
                    </span>
                    <input type="file" class="form-control" required name="image" id="fileInput">
                </div>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary CustomebBtn">Add</button>
        </form>
        
        </div>
      </div>
    </div>
  </div>    

@endsection
