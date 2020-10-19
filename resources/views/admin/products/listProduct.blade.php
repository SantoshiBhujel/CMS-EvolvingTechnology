@extends('adminlte::page')
@section('title', 'Admin Dashboard')
@section('content_header')
    <h1>Product List</h1>
@stop
@section('content')

<div class="content">
    <div class="container-fluid">
        <!-- /.card -->
        <div class="card">
            <div class="card-body">
            <h3 class="card-title">Products</h3>

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    {{ $product->id }}
                                </td>
                                <td>
                                    {{ $product->title }}
                                </td>
                                <td>
                                    {{ $product->url }}
                                </td>
                                <td>
                                    {!! Illuminate\Support\Str::limit($product->description, 80) !!}
                                </td>
                                <td>
                                    <img src="/storage/product_images/{{ $product->image }}" alt="" width="150px" height="150px">  
                                </td>
                                <td>
                                    <button>
                                        <a href="{{ route('product.edit',$product->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </button>
            
                                    <form action="{{ route('product.destroy',$product->id) }}" method="POST">
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