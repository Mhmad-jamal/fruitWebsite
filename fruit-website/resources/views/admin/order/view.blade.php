@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row justify-content-center">
    <div class="col-md-10 justify-content-center">
        <div class="card">
            <h5 class="card-header">All item</h5>
            <div class="table-responsive text-nowrap">
              <table class="table" id="itemtable">
                <thead class="table-dark">
                  <tr>
                    <th>id</th>
                    <th>user name </th>

                    <th>item Name</th>
                    <th>item type</th>
                    <th>item plan</th>

                    <th> Quantity </th>

                    <th> Price</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  
                  
                @foreach ($orders as $item )
             
                  <tr>
                    <td>
                      <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$item->id}}</strong>
                    </td>
                    <td>{{$item->user_name}}</td>
                    <td>
                        <span class="badge bg-label-warning me-1">{{ ($item->product_name == '') ? $item->gift_name : $item->product_name }}</span>
                    </td>
                    <td><span class="badge bg-label-danger me-1">{{$item->type}}</span></td>
                    <td><span class="badge bg-label-danger me-1">{{$item->plan}}</span></td>

                    <td><span class="badge bg-label-danger me-1">{{$item->quantity}}</span></td>
                    <td><span class="badge bg-label-danger me-1">{{$item->price}}</span></td>


                    <td>
                     {{--  <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{route('item.details', ['id' => $item->id])}}"><i class="bx bx-trash me-1"></i> View</a>
                          <a class="dropdown-item" href="{{ route('item.edit', ['id' => $item->id])}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                           <a class="dropdown-item" href="{{route('item.delete', ['id' => $item->id])}}"><i class="bx bx-trash me-1"></i> Delete</a>
                         </div>
                      </div> --}}
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
  let table = new DataTable('#itemtable');
</script>
@endsection
