@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Team Member List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Team Member List</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Faculty</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Facebook</th>
                            <th>Google</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Instagram</th>
                            <th>Dribble</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>
                                    {{ $team->id }}
                                </td>
                                <td>
                                    {{ $team->name }}
                                </td>
                                <td>
                                    {{ $team->faculty }}
                                </td>
                                <td>
                                    {!! Illuminate\Support\Str::limit($team->description, 80) !!}
                                </td>
                                <td>
                                    <img src="/storage/team_images/{{ $team->image }}" alt="" width="150px" height="150px">  
                                </td>
                                <td>
                                    {{ $team->facebook }}
                                </td>
                                <td>
                                    {{ $team->google }}
                                </td>
                                <td>
                                    {{ $team->twitter }}
                                </td>
                                <td>
                                    {{ $team->linkedin }}
                                </td>
                                <td>
                                    {{ $team->dribble }}
                                </td>
                                <td>
                                    {{ $team->instagram }}
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('team.edit',$team->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('team.destroy',$team->id) }}" method="POST">
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