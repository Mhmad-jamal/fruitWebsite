@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row d-flex justify-content-center">
   
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Add New Gift</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
           <form action="{{ route('Gift.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Gift Name</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M10.12 22a7.71 7.71 0 0 0 6.57-5 7.23 7.23 0 0 0 .46-3.21 3.26 3.26 0 0 1 1-2.57l.61-.61A3.89 3.89 0 0 0 19.43 6l2.28-2.28-1.42-1.43L18 4.55a3.82 3.82 0 0 0-4.66.57l-.75.75a3.22 3.22 0 0 1-2.52 1 7.05 7.05 0 0 0-3.32.57A7.75 7.75 0 0 0 2 14.11 7.59 7.59 0 0 0 10.12 22zM9.5 9.25v1.5a3.75 3.75 0 0 0-3.75 3.75h-1.5A5.26 5.26 0 0 1 9.5 9.25z">
                            </path>
                        </svg>
                    </span>

                    <input type="text" class="form-control" required name="Gift_Name" id="basic-icon-default-fullname"
                        placeholder="" value="" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
            
                @error('Gift_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                    <label for="" class="form-label">Gift Price</label>
                    <input id="" class="form-control" name="Gift_Price" type="text" placeholder="10 $">
                     
                </div>
            </div>
           
            
         
        
          <div class="row">
            <div class="col-md-6">
                
            
            </div>
          
          </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Gift Image</label>
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
                    <input type="file" class="form-control" required name="Gift_Image" id="fileInput">
                </div>
                @error('Gift_Image')
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