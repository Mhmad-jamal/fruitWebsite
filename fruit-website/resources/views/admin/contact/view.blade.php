@extends('layouts.admin')

@section('content')
@include('sweetalert::alert')

<div class="row justify-content-center">
    <div class="col-md-12 justify-content-center p-5">
        <div class="card">
            <h5 class="card-header">All Orders</h5>
            <div class="table-responsive text-nowrap">
              <table class="table" id="itemtable">
                <thead class="table-dark">
                  <tr>
                    <th>id</th>
                    <th>name </th>
                    <th>phone number </th>

                    <th> email </th>

                    <th>subject</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  
                  
                @foreach ($message as $item )
             
                  <tr>
                    <td>
                      <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>{{$item->id}}</strong>
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone_number}}</td>

                    
                    <td><span class="badge bg-label-danger me-1">{{$item->email}}</span></td>

                    <td><span class="badge bg-label-danger me-1">{{$item->subject}}</span></td>


                    <td>
                      <div class="dropdown">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                         <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ route('message.details', ['id' => $item->id]) }}">
                            <i class="bx bx-show"></i> View
                          </a>
                                                 
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
  let table = new DataTable('#itemtable');
</script>
@endsection
