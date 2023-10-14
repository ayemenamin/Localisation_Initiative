@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
        
              
              @include('layouts.alerts.success')
              @include('layouts.alerts.errors')
           
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $cat)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{asset('assets/uploads/category/'. $cat->image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="Image Here">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$cat->name}}</h6>
                          <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$cat->description}}</p>
                      <p class="text-xs text-secondary mb-0">Organization</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      @if ($cat->status == 1)
                      <span class="badge badge-sm bg-gradient-success">Online</span>
                      @else
                      <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                      @endif
                     
                    </td>
                    <td class="align-middle text-center">
                      <a class="btn btn-link text-dark px-3 mb-0" href="{{url('edit-prodacte/'.$cat->id)}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                    </td>
                    <td class="align-middle">
                   
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{url('delete-category/'.$cat->id)}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
                    </td>
                  </tr>
                  @endforeach
        
              
         
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
  </div>

@endsection