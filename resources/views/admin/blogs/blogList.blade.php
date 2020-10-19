@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Blog List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Blogs</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                    {{ $blog->id }}
                                </td>
                                <td>
                                    {{ $blog->title }}
                                </td>
                                <td>
                                    {!! Illuminate\Support\Str::limit($blog->body, 80) !!}    
                                </td>
                                <td>
                                    <img src="/storage/blog_images/{{ $blog->image }}" alt="" width="150px" height="150px">  
                                </td>
                                
                                <td>
                                    <button>
                                        <a href="{{ route('blog.edit',$blog->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
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