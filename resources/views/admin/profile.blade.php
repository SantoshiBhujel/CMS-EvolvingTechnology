@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Blog Edit</h1>
@stop
@section('content')
<section class="section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-md-9">
             @include('includes.alert')
             <form method="POST" action="{{ route('admin.update',$user->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="card padding-card t-align-l no-radius border">
                   
                   <div class="card-body t-align-l">
                      <h5 class="card-title mb-4">Personal Details</h5>
                      <div class="form-group">
                         <label>Profile Picture</label>
                         <br>
                         <img class="img-fluid mb-4" src="/storage/profile_images/{{ $user->image }}" alt="" width="200px">
                         <br>
                         <input type="file" name="image">
                      </div>

                      <div class="form-group">
                         <label>First Name <span class="text-danger">*</span></label>
                         <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="Enter First Name">
                      </div>

                      <div class="form-group">
                         <label>Phone <span class="text-danger">*</span></label>
                         <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" placeholder="Enter Phone">
                      </div>

                      <div class="form-group">
                         <label>Email Address <span class="text-danger">*</span></label>
                         <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="Enter Email Address">
                      </div>
                      
                      <div class="form-group">
                         <label>Location <span class="text-danger">*</span></label>
                         <input type="text" class="form-control" value="{{ $user->location }}" name="location" placeholder="Enter Locations">
                      </div>
                      <div class="form-group">
                         <label>About Me <span class="text-danger">*</span></label> 
                         <textarea name="about" id="editor1" rows="10" cols="80">{{ $user->about }}</textarea>
                         
                      </div>
                   </div>
                </div>
                <div class="card padding-card t-align-l no-radius border">
                   <div class="card-body t-align-l">
                      <h5 class="card-title mb-4">Change Password</h5>
                      <div class="form-group">
                         <label>Password <span class="text-danger">*</span></label>
                         <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                      <div class="form-group">
                         <label>Confirm Password <span class="text-danger">*</span></label>
                         <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                      </div>
                   </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
             </form>
          </div>
       </div>
    </div>
 </section>
@stop