@extends('layouts.backend.master')
@section('base.title', 'Product Product')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">Product List</h3>
                                <a href="{{ route('product.create') }}" class="btn btn-primary">Create Product</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table style="text-align: center" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Price <small>(Tk)</small></th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($products->count() > 0)
                                    @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->slug  }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}/=</td>
                                            <td>
                                                <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                                    <img class="img-fluid" src="{{ asset('images/product/'. $product->image) }}"
                                                         alt="catImg">
                                                </div>
                                            </td>
                                            <td>
                                                @if($product->status == 1) <span class="badge badge-success">Active</span>@else
                                                    <span class="badge badge-danger">Inactive</span> @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-warning btn-xs" href="{{ route('product.edit', $product->id) }}"><i class="fas fa-pen-square"></i></a>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="alert('Are You Sure to DELETE!')" class="btn btn-sm btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8" style="text-align: center; color: grey">No product found</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
