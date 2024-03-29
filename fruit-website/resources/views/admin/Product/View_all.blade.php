@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row justify-content-center">
    <div class="col-md-10 justify-content-center">
        <div class="card">
            <h5 class="card-header">All Product</h5>
            <div class="table-responsive text-nowrap">
              <table class="table" id="Producttable">
                <thead class="table-dark">
                  <tr>
                    <th>id</th>
                    <th>Category</th>

                    <th>Name</th>
                    <th>One Time Price</th>

                    <th>Weekly Price</th>
                    <th>Monthly Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  
                  
                  @foreach ($products as $product )
             
                  <tr>
                    <td>
                      <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$product->id}}</strong>
                    </td>
                    <td>{{$product->category_name}}</td>
                    <td>
                        <span class="badge bg-label-warning me-1">{{$product->product_name}}</span>
                    </td>
                    <td><span class="badge bg-label-danger me-1">{{$product->one_time_price}}</span></td>
                    <td><span class="badge bg-label-danger me-1">{{$product->weekly_price}}</span></td>
                    <td><span class="badge bg-label-danger me-1">{{$product->monthly_price}}</span></td>


                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{route('product.details', ['id' => $product->id])}}"><i class="bx bx-show"></i> View</a>
                          <a class="dropdown-item" href="{{ route('product.edit', ['id' => $product->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                           <a class="dropdown-item" href="{{route('product.delete', ['id' => $product->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
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
</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
  let table = new DataTable('#Producttable');
</script>
@endsection
