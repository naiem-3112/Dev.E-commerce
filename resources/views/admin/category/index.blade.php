@extends('layouts.backend.master')
@section('base.title', 'Product Category')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
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
                                <h3 class="card-title">Category List</h3>
                                <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($categories->count() > 0)
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug  }}</td>
                                            <td>
                                                <div>
                                                    <img src="{{ asset('images/category/'. $category->image) }}"
                                                         alt="category">
                                                </div>
                                            </td>
                                            <td>
                                                @if($category->status == 1) <span class="badge badge-info"></span>@else
                                                    <span class="badge badge-danger"></span> @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('category.edit', $category->id) }}"><i class="fa fa-pen"></i></a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('category.view', $category->id) }}"><i class="fa fa-eye"></i></a>
                                                <a class="btn btn-sm btn-primary" href="{{ route('category.delete', $category->id) }}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="6" style="text-align: center; color: grey">No category found</td>
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
