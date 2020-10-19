@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Banner List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Banner Images</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            <tr>
                                <td>
                                    {{ $banner->id }}
                                </td>
                                <td>
                                    {{ $banner->title }}
                                </td>
                                <td>
                                    {!! $banner->description !!}
                                </td>
                                <td>
                                    <img src="/storage/banner_images/{{ $banner->image }}" alt="" width="200px">  
                                </td>
                                
                                <td>
                                    <button>
                                        <a href="{{ route('banner.edit',$banner->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('banner.destroy',$banner->id) }}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </div>
</div>

@stop