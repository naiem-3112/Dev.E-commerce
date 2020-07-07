@extends('layouts.backend.master')
@section('base.title', 'SubCategory List')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="section-header">
        <h1>All Brands</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">SubCategory</div>
        </div>
    </div>
    <!-- /.content-header -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="card-title">SubCategory List</h3>
                                <a href="{{ route('subCategory.create') }}" class="btn btn-primary">Create SubCategory</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table style="text-align: center" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SubCategory Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Parent Category</th>
                                    <th>Category Position</th>
                                    <th>Image</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($sub_categories->count() > 0)
                                    @foreach($sub_categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->slug  }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>{{ $category->category->name }}</td>
                                            <td>{{ $category->position_id }}</td>
                                            <td>
                                                <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                                    <img class="img-fluid" src="{{ asset('images/subCategory/'. $category->image) }}"
                                                         alt="catImg">
                                                </div>
                                            </td>
                                            <td>
                                                @if($category->featured == 1) <span class="badge badge-info">Yes</span>@else
                                                    <span class="badge badge-warning">No</span> @endif
                                            </td>
                                            <td>
                                                @if($category->status == 1) <span class="badge badge-success">Active</span>@else
                                                    <span class="badge badge-danger">Inactive</span> @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-warning btn-xs" href="{{ route('subCategory.edit', $category->id) }}"><i class="fas fa-pen-square"></i></a>
                                                <form action="{{ route('subCategory.destroy', $category->id) }}" method="post" style="display: inline-block">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="alert('Are You Sure to DELETE!')" class="btn btn-sm btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" style="text-align: center; color: grey">No subCategory found</td>
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
