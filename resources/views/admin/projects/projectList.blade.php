@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Project List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Projects</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Progress</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>
                                    {{ $project->id }}
                                </td>
                                <td>
                                    {{ $project->title }}
                                </td>
                                <td>
                                    {{ $project->url }}
                                </td>
                                <td>
                                    {!! Illuminate\Support\Str::limit($project->description, 80) !!}
                                </td>
                                <td>
                                    <img src="/storage/project_images/{{ $project->image }}" alt="" width="150px" height="150px">  
                                </td>
                                <td>
                                    {{ $project->progress }}
                                </td>
                                <td>
                                    {{ $project->status }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('project.edit',$project->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('project.destroy',$project->id) }}" method="POST">
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