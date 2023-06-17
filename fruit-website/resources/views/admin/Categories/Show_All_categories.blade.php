@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<section class="contanier" style="max-width: 100%; overflow: hidden;">
<div class="row">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-center">
<h1>        All Categories
</h1>
    </div>
    <div class="col-md-4"></div>
</div>
<div class="row justify-content-center ">
    <div class="col-md-10 p-5">
        <div class="table-responsive text-nowrap" style="min-height: 250px;">
            <table class="table">
              <thead class="table-dark">
                <tr>
                  <th>id</th>
                  <th>Category Name</th>
                  <th>Category Description</th>
                  <th>Category image</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($categories as $category )
                <tr>
                    <td>
                      <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$category->id}}</strong>
                    </td>
                    <td>{{$category->category_name}}</td>
                    <td>
                        <p class="text-truncate d-inline-block" style="max-width: 150px;">
                            {{$category->category_description}}
                        </p>
                          
                    </td>
                    <td style="width: 25%">      
                        <img style="    max-width: 25%; max-height: 25%;" src="{{ asset('storage/' . $category->category_image) }}" class="img-thumbnail" alt="Image">

                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ route('category.show', ['id' => $category->id]) }}" data-id="{{$category->id}}" href="javascript:void(0);"><i class="bx bx-show me-1"></i> view</a>

                          <a class="dropdown-item" href="{{ route('category.edit', ['id' => $category->id]) }}" data-id="{{$category->id}}" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                          <a class="dropdown-item"  href="{{ route('category.delete', ['id' => $category->id]) }}"  data-id="{{$category->id}}"><i class="bx bx-trash me-1"></i> Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
    </div>
</div>
</section>
@endsection