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
                                        <form class="form form-vertical" action="{{route('admin.news.update',$news->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$news -> id}}">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Title</label>
                                                            <input type="text" id="first-name-vertical"
                                                                class="form-control" name="title_en" placeholder="Enter Here" value="{{$news->title_en}}"
                                                                >
                                                        </div>
                                                        @error('title_en')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Date</label>
                                                            <input type="date" id="email-id-vertical"
                                                                class="form-control" name="date" value="{{$news->date}}"
                                                               >
                                                        </div>
                                                        @error('date')
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
                                                                value="{{$news->title_ar}}"
                                                                    id="first-name-icon" name="title_ar" placeholder="Enter Here">
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
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Image</label>
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
                        <section class="section">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            Discription News In English			
                                            <label for="exampleFormControlTextarea1" class="form-label">Example
                                                    </label>
                                                    <textarea class="ckeditor" required="" name="description_en" >{{$news->description_en}}</textarea>
                                              
                                            </div>
                                        </div>
                                        @error('description_en')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>
                        </section>
                        <section class="section">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            وصف الاخبار بااللغه العربيه			
                                            <label for="exampleFormControlTextarea1" class="form-label">
                                                    </label>
                                                    <textarea class="ckeditor" required="" name="description_ar" >{{$news->description_ar}}</textarea>
                                              
                                            </div>
                                        </div>
                                        @error('description_ar')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit"
                                        class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset"
                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                        </section>
                    </div>
                </section>
                <!-- // Basic Vertical form layout section end -->

@endsection