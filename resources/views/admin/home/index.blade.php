@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card-header pb-0 p-3">
            <div class="row">
              <div class="col-6 d-flex align-items-center">
                <h6 class="mb-0">Payment Method</h6>
              </div>
              <div class="col-6 text-end">
                <a class="btn bg-gradient-dark mb-0" href="{{route('homepage.create')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New </a>
              </div>
            </div>
          </div>
        <div class="card my-4">
        
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Welcome Image</h6>
                </div>
              </div>
              @include('layouts.alerts.success')
              @include('layouts.alerts.errors')
           
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sub Title</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($welcomes as $item)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{asset('assets/uploads/home/'. $item->image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{$item->title_en}}</h6>
                              <p class="text-xs text-secondary mb-0">{{$item->title_ar}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">{{$item->sub_title_en}}</p>
                          <p class="text-xs text-secondary mb-0">{{$item->sub_title_ar}}</p>
                        </td>
                        <td class="align-middle text-center">
                          <a class="btn btn-link text-dark px-3 mb-0" href="{{route('edit-home',$item->id)}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                        </td>
                        <td class="align-middle">
                   
                          <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{route('delet-home',$item->id)}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
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