@extends('layouts.app')

@section('title', 'home')
@section('content')

    <div class="row">
        <div class="col-md-12">
                <div>
                    @if(session('success'))
                        <div class="alert alert-primary" role="alert">
                    {{session('success')}}
                        </div>
                    @endif
                    <div class="card p-3 mb-3">
                            <p class="fw-bold">Write a ShoutOut</p>
                                <form action="" method="POST" enctype="multipart/form-data">
                                 @csrf
                                <div class="row">
                                    <div class="col-10" id="imageArea">
                                        <input type="hidden" name="user_id" value="">
                                        <input class="form-control" placeholder="Say anything you want..." type="text" name="content">
                                        
                                        <input class="form-control d-none" type="file" name="image" id="image" accept=".gif,.jpg,.jpeg,.png" onchange="imageUpload(event);">
                                        <label class="mt-2 text-white rounded px-2 py-1 fw-bold" for="image" style="cursor: pointer;background-color: #634BFF;" id="imageUploadLabel"><small>⬆ Add a photo...</small></label>
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn" style="background-color: #634BFF;">
                                            Shout
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h2>Recent Shouts</h2>
                                <div class="card my-2">
                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            <a href="" style="text-decoration:none">David</a>
                                        
                                            <a href="#" class="float-end dropdown-toggle" style="text-decoration:none" data-bs-toggle="dropdown"></a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="">Delete</a></li>
                                            </ul>
                                            
                                            <small class="text-muted float-end mx-3 fw-normal">⏲</small>
                                        </h6>
                                        <p>
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis consectetur vel placeat ducimus blanditiis illum fugiat nam quibusdam ratione dicta maiores esse, quos laborum voluptates, libero pariatur possimus magnam odio!
                                        </p>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                </div>
         </div>
    </div>


 @endsection           
                          