@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Insert Team Member</h1>
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
                    <h3 class="card-title">Insert Team Member</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                        <label for="title">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                        <label for="body">Description <span class="text-danger">*</span> </label>
                        <textarea name="description" id="editor1" rows="10" cols="80"></textarea>
                        </div>
                        
                        <div class="form-group">
                        <label for="body">Faculty <span class="text-danger">*</span> </label>
                        <input type="text" name="faculty" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="image">Image <span class="text-danger">*</span> </label>
                            <br>
                            <input class="upload" type="file" name="image">
                        </div>
                        <div class="form-group">
                        <label for="title">Facebook</label>
                        <input type="text" name="facebook" class="form-control">
                        </div>

                        <div class="form-group">
                        <label for="title">Google</label>
                        <input type="text" name="google" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Twitter</label>
                        <input type="text" name="twitter" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Linkedin</label>
                        <input type="text" name="linkedin" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Instagram</label>
                        <input type="text" name="instagram" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="title">Dribble</label>
                        <input type="text" name="dribble" class="form-control">
                        </div>
                        <input type="submit" value="Create" class="btn btn-success float-right">
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