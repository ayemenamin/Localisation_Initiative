@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-6 mb-xl-0 mb-4">
          
            <div class="card bg-transparent shadow-xl">
              <div class="overflow-hidden position-relative border-radius-xl">
               
                <span class="mask bg-gradient-dark opacity-10"></span>
                <div class="card-body position-relative z-index-1 p-3">
                    @if($category->image)
                    <img src="{{asset('assets/uploads/category/'.$category->image)}}" alt="" class="w-60 mt-2">
                    @endif
                  
                </div>
              </div>
            </div>
          </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Category Edit</a></h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
             <div class="card-body">
                  <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-xl-6">
                        <h4 class="card-title">Category Details</h4>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label"
                            >Name</label
                          >
                          <div class="col-lg-9">
                            <input type="text" value="{{$category->name}}" class="form-control" name="name"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label"
                            >Slug</label
                          >
                          <div class="col-lg-9">
                            <input type="text" value="{{$category->slug}}" class="form-control" name="slug"/>
                          </div>
                        </div>
                    
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Status</label>
                          <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="status"
                                id="gender_male"
                                {{$category->status == '1'? 'checked' :''}}
                              
                          
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Popular</label>
                          <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                              <input
                                class="form-check-input"
                                type="checkbox"
                                name="popular"
                                id="gender_male"
                                {{$category->popular == '1'? 'checked' :''}}
                         
                              />
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Meta Description</label>
                          <div class="col-lg-9">
                            <textarea
                              rows="4"
                              cols="5"
                              class="form-control"
                              placeholder="Enter Description"
                              name="meta_description"
                            >
                            {{$category->meta_descrip}}
                        </textarea>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <h4 class="card-title">Category details</h4>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label"
                            >Meta Title</label
                          >
                          <div class="col-lg-9">
                            <input type="text" class="form-control" value="{{$category->meta_title}}" name="meta_title"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Description</label>
                          <div class="col-lg-9">
                            <textarea
                              rows="4"
                              cols="5"
                              class="form-control"
                              placeholder="Enter Description"
                              name="description"
                            >{{$category->description}}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label"
                            >Image</label
                          >
                          <div class="col-lg-9">
                            <input type="file" class="form-control" name="image"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label">Meta Keywords</label>
                          <div class="col-lg-9">
                            <textarea
                              rows="4"
                              cols="5"
                              class="form-control"
                              placeholder="Enter Keywords"
                              name="meta_keywords"
                            > {{$category->meta_keywords}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-end">
                      <button type="submit" class="btn btn-primary">
                        Submit
                      </button>
                    </div>
                  </form>
                </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Projects table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center justify-content-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Budget</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Asana</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$2,500</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/github.svg" class="avatar avatar-sm rounded-circle me-2" alt="invision">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Github</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$5,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm rounded-circle me-2" alt="jira">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Atlassian</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$3,400</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">30%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/bootstrap.svg" class="avatar avatar-sm rounded-circle me-2" alt="webdev">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Bootstrap</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$14,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">working</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">80%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm rounded-circle me-2" alt="slack">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Slack</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$1,000</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">canceled</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">0%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="0" style="width: 0%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2">
                        <div>
                          <img src="../assets/img/small-logos/devto.svg" class="avatar avatar-sm rounded-circle me-2" alt="xd">
                        </div>
                        <div class="my-auto">
                          <h6 class="mb-0 text-sm">Devto</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-sm font-weight-bold mb-0">$2,300</p>
                    </td>
                    <td>
                      <span class="text-xs font-weight-bold">done</span>
                    </td>
                    <td class="align-middle text-center">
                      <div class="d-flex align-items-center justify-content-center">
                        <span class="me-2 text-xs font-weight-bold">100%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-xs"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>

@endsection