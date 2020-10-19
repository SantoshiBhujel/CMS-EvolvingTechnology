@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Create Project</h1>
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
                      <h3 class="card-title">Create Project</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          
                          <div class="form-group">
                          <label for="title">Title <span class="text-danger">*</span></label>
                          <input type="text" name="title" class="form-control" required>
                          </div>
                           
                          <div class="form-group">
                            <label for="body">Body <span class="text-danger">*</span> </label>
                            <textarea name="description" id="editor1" rows="10" cols="80"></textarea>
                          </div>
                          
                          <div class="form-group">
                              <label for="image">Image <span class="text-danger">*</span> </label>
                              <br>
                              <input class="upload" type="file" name="image">
                          </div>
                          <div class="form-group">
                            <label for="title">URL <span class="text-danger">*</span></label>
                            <input type="text" name="url" class="form-control" required>
                          </div>
                          <div class="form-group ">
                            <label for="progress">{{ __('Progress') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input type="radio" id="" name="progress" value="Ongoing" checked>
                                <label for="status" >Ongoing</label><br>
                                <input type="radio" id="" name="progress" value="Completed">
                                <label for="status" >Completed</label><br>
                                <input type="radio" id="" name="progress" value="Future">
                                <label for="status" >Future</label><br>
                            </div>
                        </div>
                        <div class="form-group ">
                          <label for="status">{{ __('Status') }} <span class="text-danger">*</span></label>
                          <div class="col-md-6">
                              <input type="radio" id="status" name="status" value="Active" checked>
                              <label for="status" >Active</label><br>
                              <input type="radio" id="status" name="status" value="Inactive">
                              <label for="status" >Inactive</label><br>
                          </div>
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