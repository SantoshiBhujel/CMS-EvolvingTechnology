@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Edit Client</h1>
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
                      <h3 class="card-title">Edit Client</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      </div>
                    </div>
                    <div class="card-body">
                      <form action="{{ route('client.update',$client->id) }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{ method_field('PATCH') }}
                          <div class="form-group">
                          <label for="title">Name <span class="text-danger">*</span></label>
                          <input type="text" name="name" class="form-control" value="{{ $client->name }}" required>
                          </div>
                          
                          <div class="form-group">
                              <label for="image">Image <span class="text-danger">*</span> </label>
                              <br>
                              <input class="upload" type="file" name="image">
                          </div>
                          <input type="submit" value="Edit" class="btn btn-success float-right">
                      </form>
                    </div>
                  </div>
                </div>               
              </div>
          </section>                
    </div>
</div>

@stop