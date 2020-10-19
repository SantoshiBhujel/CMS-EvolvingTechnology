@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Clients List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Clients</h3>

            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>
                                    {{ $client->id }}
                                </td>
                                <td>
                                    {{ $client->name }}
                                </td>
                                <td>
                                    <img src="/storage/client_images/{{ $client->image }}" alt="" width="150px" height="150px">  
                                </td>
                                
                                <td>
                                    <button>
                                        <a href="{{ route('client.edit',$client->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('client.destroy',$client->id) }}" method="POST">
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