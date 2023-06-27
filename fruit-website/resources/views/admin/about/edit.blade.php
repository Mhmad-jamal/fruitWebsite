@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row d-flex justify-content-center">
   
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0"> Edit About Us Page</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
           <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">First Section Title</label>
                

                    <input type="text" class="form-control" required name="first_section_first" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->first_section_first}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                <label class="form-label" for="basic-icon-default-fullname">First Section  Sub Title 1</label>

                <div class="input-group input-group-merge">
                   

                    <input type="text" class="form-control" required name="first_section_secound" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->first_section_secound}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                <label class="form-label" for="basic-icon-default-fullname">First Section  Sub Title 2</label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="first_section_third" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->first_section_third}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                
                <label class="form-label" for="basic-icon-default-fullname">Title </label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="title" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->title}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                <label class="form-label" for="basic-icon-default-fullname"> Sub Title </label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="sub_title" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->sub_title}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
              
                <label class="form-label" for="basic-icon-default-fullname"> Description </label>

                <div class="input-group input-group-merge">
                  

                    <textarea type="text" class="form-control" required name="description" id="basic-icon-default-fullname"
                        placeholder="" value="" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                        {{$about->description}}
                    </textarea>
                </div>
                
                <label class="form-label" for="basic-icon-default-fullname">Secound Section Left </label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="secound_section_first" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->secound_section_first}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                <label class="form-label" for="basic-icon-default-fullname">Secound Section Center </label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="secound_section_second" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->secound_section_second}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                <label class="form-label" for="basic-icon-default-fullname">Secound Section Right </label>

                <div class="input-group input-group-merge">
                  

                    <input type="text" class="form-control" required name="secound_section_last" id="basic-icon-default-fullname"
                        placeholder="" value="{{$about->secound_section_last}}" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>

            </div>
           <input type="hidden" name="id" value="{{$about->id}}">
           
            <div class="mb-3 p-3">
                <label class="form-label" for="basic-icon-default-email">Main Image</label>
                <img src="{{asset('storage/'.$about->image)}}" class="img-fluid mt-3 mb-3" alt="Responsive image">

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
                    <input type="file" class="form-control"  name="image" id="fileInput">
                </div>
                @error('')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center mb-3">
                    <button type="submit" class="btn btn-primary CustomebBtn">edit</button>

                </div>
            </div>
        </form>
        
        </div>
      </div>
    </div>
  </div>
@endsection