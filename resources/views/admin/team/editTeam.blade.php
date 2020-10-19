@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Edit Team Member</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
            <div class="col-md-8">
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Team Member</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                        <label for="title">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="body">Description <span class="text-danger">*</span> </label>
                        <textarea name="description" id="editor1" rows="10" cols="80">{{ $team->description }}</textarea>
                        </div>
                        
                        <div class="form-group">
                        <label for="body">Faculty <span class="text-danger">*</span> </label>
                        <input type="text" name="faculty" class="form-control" value="{{ $team->faculty }}" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image <span class="text-danger">*</span> </label>
                            <br>
                            <input class="upload" type="file" name="image">
                        </div>
                        <div class="form-group">
                        <label for="title">Facebook</label>
                        <input type="text" name="facebook" value="{{ $team->facebook}}" class="form-control">
                        </div>

                        <div class="form-group">
                        <label for="title">Google</label>
                        <input type="text" name="google" value="{{ $team->google }}" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Twitter</label>
                        <input type="text" name="twitter" value="{{ $team->twitter }}" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Linkedin</label>
                        <input type="text" name="linkedin" value="{{ $team->linkedin }}" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Instagram</label>
                        <input type="text" name="instagram" value="{{ $team->instagram }}" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Dribble</label>
                        <input type="text" name="dribble" value="{{ $team->dribble }}" class="form-control">
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
    </div>
</div>
 
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("editor1");
    </script>
@stop