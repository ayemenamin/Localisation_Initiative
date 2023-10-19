@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">
                @include('layouts.alerts.success')
                @include('layouts.alerts.errors')
              </h6>
            </div>
            <div class="col-6 text-end">
              <a class="btn bg-gradient-dark mb-0" href="{{route('admin.news.create')}}"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New </a>
            </div>
          </div>
        </div>
        <div class="card my-4">
        
              
              @include('layouts.alerts.success')
              @include('layouts.alerts.errors')
           
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Add By</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($news as $new)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{asset('assets/uploads/news/'. $new->image)}}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$new->title_en}}</h6>
                          <p class="text-xs text-secondary mb-0">{{$new->title_ar}}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ $new->user->name }}</p>
                      {{-- <p class="text-xs text-secondary mb-0">Organization</p> --}}
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">{{$new->date}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <a class="btn btn-link text-dark px-3 mb-0" href="{{route('news.edit',$new->id)}}"><i class="material-icons text-sm me-2">edit</i>Edit</a>
                    </td>
                    <td class="align-middle">
                      <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="{{route('admin.news.delet',$new->id)}}"><i class="material-icons text-sm me-2">delete</i>Delete</a>
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