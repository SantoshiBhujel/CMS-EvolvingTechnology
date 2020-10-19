@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>User Edit</h1>
@stop
@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Update</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                <div class="form-group">
                  <label>Profile Picture</label>
                  <br>
                  <img class="img-fluid mb-4" src="{{ asset('/storage/profile_images/{{ $user->image }}') }}" alt="No preview" width="200px">
                  <br>
                  <input type="file" name="image">
               </div>
                <div class="form-group">
                <label for="inputName">Full Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>
                
                <div class="form-group">
                    <label for="inputName">Mobile Number</label>
                    <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"required>
                </div>

                <div class="form-group">
                    <label for="inputName">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div> 
                
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $user->facebook }}" placeholder="Facebook URL">
                </div>
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="{{ $user->twitter }}"  placeholder="@Username">
                </div>
                <div class="form-group">
                    <label>Google+</label>
                    <input type="text" class="form-control" name="google" value="{{ $user->google }}" placeholder="@Username">
                </div>
                <div class="form-group">
                    <label>Linkedin <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="linkedin" value="{{ $user->linkedin }}" placeholder="Linkedin URL">
                </div>
                <div class="form-group">
                    <label>Instagram <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="instagram" value="{{ $user->instagram }}" placeholder="@Username">
                </div>
                <input type="submit" value="Update" class="btn btn-success float-right">
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      
    </div>
</section>
  <!-- /.content -->

@stop