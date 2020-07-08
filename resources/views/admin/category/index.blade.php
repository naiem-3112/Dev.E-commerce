@extends('layouts.backend.master')
@section('base.title', 'Category List')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>All Categories</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Category</div>
    </div>
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Category List</h4>
                        <a href="{{ route('category.create') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> Add New</a>
                        <div class="card-header-form">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th class="p-0 text-center">ID</th>
                                    <th class="p-0 text-center">Category Name</th>
                                    <th class="p-0 text-center">Slug</th>
                                    <th class="p-0 text-center">Description</th>
                                    <th class="p-0 text-center">Category Position</th>
                                    <th class="p-0 text-center">Image</th>
                                    <th class="p-0 text-center">Featured</th>
                                    <th class="p-0 text-center">Status</th>
                                    <th class="p-0 text-center">Action</th>
                                </tr>
                                @if($categories->count() > 0)
                                @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="p-0 text-center">{{ $category->id }}</th>
                                    <td class="p-0 text-center">{{ $category->name }}</td>
                                    <td class="p-0 text-center">{{ $category->slug  }}</td>
                                    <td class="p-0 text-center">{{ $category->description }}</td>
                                    <td class="p-0 text-center">{{ $category->position_id }}</td>
                                    <td class="p-0 text-center">
                                        <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                            <img class="img-fluid"
                                                src="{{ asset('images/category/'. $category->image) }}" alt="catImg">
                                        </div>
                                    </td>
                                    <td class="p-0 text-center">
                                        @if($category->featured == 1) <span class="badge badge-info">Yes</span>@else
                                        <span class="badge badge-warning">No</span> @endif
                                    </td>
                                    <td class="p-0 text-center">
                                        @if($category->status == 1) <span class="badge badge-success">Active</span>@else
                                        <span class="badge badge-danger">Inactive</span> @endif
                                    </td>
                                    <td class="p-0 text-center">
                                        <a class="btn btn-sm btn-warning btn-xs"
                                            href="{{ route('category.edit', $category->id) }}"><i
                                                class="fas fa-pen-square"></i></a>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="post"
                                            style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="alert('Are You Sure to DELETE!')"
                                                class="btn btn-sm btn-danger btn-xs"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9" style="text-align: center; color: grey">No category found</td>
                                </tr>
                                @endif
                            </table>
                            {{ $categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
