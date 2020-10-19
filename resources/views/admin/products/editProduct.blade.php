@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Update Product</h1>
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
                      <h3 class="card-title">Update Product</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{ method_field('PATCH') }}
                          <div class="form-group">
                          <label for="title">Title <span class="text-danger">*</span></label>
                          <input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
                          </div>
                           
                          <div class="form-group">
                            <label for="body">Description <span class="text-danger">*</span> </label>
                            <textarea name="description" id="editor1" rows="10" cols="80">{{ $product->description }}</textarea>
                          </div>
                          
                          <div class="form-group">
                              <label for="image">Image <span class="text-danger">*</span> </label>
                              <br>
                              <input class="upload" type="file" name="image">
                          </div>
                          <div class="form-group">
                            <label for="title">URL</label>
                            <input type="text" name="url" class="form-control" value="{{ $product->url }}">
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