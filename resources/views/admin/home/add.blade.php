@extends('layouts.admin')

@section('content')

        
                <!-- Basic Vertical form layout section start -->
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">English Form</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{route('admin.welcom.store')}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Title</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="title_en"
                                                                >
                                                        </div>
                                                        @error('title_en')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Sub Title</label>
                                                            <input type="text" id="email-id-vertical"
                                                                class="form-control" name="sub_title_en"
                                                               >
                                                        </div>
                                                        @error('sub_title_en')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Mobile</label>
                                                            <input type="file" id="contact-info-vertical"
                                                                class="form-control" name="image"
                                                               >
                                                        </div>
                                                        @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                              
                                                 
                                                  
                                                </div>
                                            </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اللغه العربيه</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">العنوان</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                   
                                                                    id="first-name-icon" name="title_ar">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('title_ar')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">

                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">العنوان الفرعي</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control"
                                                                    id="email-id-icon" name="sub_title_ar">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('sub_title_ar')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                       
                                           
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit"
                                                            class="btn btn-primary me-1 mb-1">Submit</button>
                                                        <button type="reset"
                                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->

@endsection