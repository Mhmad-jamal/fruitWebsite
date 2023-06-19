@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row d-flex justify-content-center">
   
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Add New Product</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
           <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
 <div class="mb-3">
    <label class="form-label" for="basic-icon-default-fullname">Category Name</label>
    <div class="input-group input-group-merge">
        
        <select  class="form-control" required name="Category_id" id="basic-icon-default-fullname"
            placeholder="" aria-label="" aria-describedby="basic-icon-default-fullname2">
            <option disabled>Select category</option>
            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach

        </select>
    </div>
    @error('Product_Name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M10.12 22a7.71 7.71 0 0 0 6.57-5 7.23 7.23 0 0 0 .46-3.21 3.26 3.26 0 0 1 1-2.57l.61-.61A3.89 3.89 0 0 0 19.43 6l2.28-2.28-1.42-1.43L18 4.55a3.82 3.82 0 0 0-4.66.57l-.75.75a3.22 3.22 0 0 1-2.52 1 7.05 7.05 0 0 0-3.32.57A7.75 7.75 0 0 0 2 14.11 7.59 7.59 0 0 0 10.12 22zM9.5 9.25v1.5a3.75 3.75 0 0 0-3.75 3.75h-1.5A5.26 5.26 0 0 1 9.5 9.25z">
                            </path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" required name="Product_Name" id="basic-icon-default-fullname"
                        placeholder="" value="" aria-label="JApple" aria-describedby="basic-icon-default-fullname2">
                </div>
                @error('Product_Name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Product Details</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M12 22a9.83 9.83 0 0 1-3.26-.55 2.23 2.23 0 0 0-1.7.19 3.51 3.51 0 0 1-2.47.24 3.55 3.55 0 0 1-2.45-2.45A3.51 3.51 0 0 1 2.36 17a2.23 2.23 0 0 0 .19-1.7 10.07 10.07 0 0 1 0-6.53 9.87 9.87 0 0 1 6.18-6.23 10.07 10.07 0 0 1 6.53 0A2.23 2.23 0 0 0 17 2.36a3.51 3.51 0 0 1 2.47-.24 3.55 3.55 0 0 1 2.45 2.45A3.51 3.51 0 0 1 21.64 7a2.23 2.23 0 0 0-.19 1.7 10.07 10.07 0 0 1 0 6.53 9.87 9.87 0 0 1-6.19 6.19A10.33 10.33 0 0 1 12 22zm-3.84-2.64a3.91 3.91 0 0 1 1.23.2 8 8 0 0 0 5.24 0 7.84 7.84 0 0 0 4.94-4.93 8 8 0 0 0 0-5.24 4.19 4.19 0 0 1 .29-3.23 1.53 1.53 0 0 0 .09-1.08 1.49 1.49 0 0 0-1-1 1.53 1.53 0 0 0-1.08.09 4.19 4.19 0 0 1-3.23.29 8 8 0 0 0-5.24 0 7.84 7.84 0 0 0-4.97 4.91 8 8 0 0 0 0 5.24 4.19 4.19 0 0 1-.29 3.23 1.53 1.53 0 0 0-.09 1.08 1.49 1.49 0 0 0 1 1 1.53 1.53 0 0 0 1.08-.09 4.47 4.47 0 0 1 2.03-.47z">
                            </path>
                            <path d="M8 12H6a6 6 0 0 1 6-6v2a4 4 0 0 0-4 4z"></path>
                        </svg>
                    </span>
                    <input type="text" id="basic-icon-default-company" required name="Product_Details" class="form-control"
                        placeholder="Product Details." aria-label="Product Details."
                        aria-describedby="basic-icon-default-company2">
                </div>
                @error('Product_Details')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-company">Product Contain</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                        <path
                            d="M10.12 22a7.71 7.71 0 0 0 6.57-5 7.23 7.23 0 0 0 .46-3.21 3.26 3.26 0 0 1 1-2.57l.61-.61A3.89 3.89 0 0 0 19.43 6l2.28-2.28-1.42-1.43L18 4.55a3.82 3.82 0 0 0-4.66.57l-.75.75a3.22 3.22 0 0 1-2.52 1 7.05 7.05 0 0 0-3.32.57A7.75 7.75 0 0 0 2 14.11 7.59 7.59 0 0 0 10.12 22zM9.5 9.25v1.5a3.75 3.75 0 0 0-3.75 3.75h-1.5A5.26 5.26 0 0 1 9.5 9.25z">
                        </path>
                    </svg>
                    </span>
                    <input type="text" id="basic-icon-default-company" required name="Product_Contain" class="form-control"
                        placeholder="Apple-Mango-bannana" aria-label="Apple-Mango-bannana"
                        aria-describedby="basic-icon-default-company2">
                </div>
                @error('Product_Details')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
          <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="defaultInput" class="form-label">One Time Price</label>
                    <input id="defaultInput" class="form-control" name="One_Time_Price" type="text" placeholder="100 $">
                     
                </div>
            
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label"> One Time Point</label>
                    <input id="" class="form-control" name="One_Time_Point" type="text" placeholder="100">
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Weekly Price</label>
                    <input id="" class="form-control" name="Weekly_Price" type="text" placeholder="100 $">
                     
                </div>
            
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label"> Weekly Point</label>
                    <input id="" class="form-control" name="Weekly_Point" type="text" placeholder="100">
                  </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label">Monthly Price</label>
                    <input id="" class="form-control" name="Monthly_Price" type="text" placeholder="100 $">
                     
                </div>
            
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="" class="form-label"> Monthly Point</label>
                    <input id="" class="form-control" name="Monthly_Point" type="text" placeholder="100">
                  </div>
            </div>
          </div>
            <div class="mb-3">
                <label class="form-label" for="basic-icon-default-email">Product Image</label>
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
                    <input type="file" class="form-control" required name="Product_Image" id="fileInput">
                </div>
                @error('Product_Image')
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