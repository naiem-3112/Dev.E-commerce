@extends('layouts.backend.master')
@section('base.title', 'Brand List')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>All Brands</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Brand</div>
    </div>
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Brands List</h4>
                        <a href="{{ route('brand.create') }}" class="btn btn-icon btn-left btn-primary"><i
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
                                    <th>ID</th>
                                    <th>Brand Name</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @if($brands->count() > 0)
                                @foreach($brands as $brand)
                                <tr>
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup"
                                                class="custom-control-input" id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <th scope="row">{{ $brand->id }}</th>
                                    <td>{{ $brand->name }}</td>
                                    <td>{{ $brand->slug  }}</td>
                                    <td>{{ $brand->description }}</td>
                                    <td>
                                        <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                            <img class="img-fluid" src="{{ asset('images/brand/'. $brand->image) }}"
                                                alt="catImg">
                                        </div>
                                    </td>
                                    <td>
                                        @if($brand->status == 1) <span class="badge badge-success">Active</span>@else
                                        <span class="badge badge-danger">Inactive</span> @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-warning btn-xs"
                                            href="{{ route('brand.edit', $brand->id) }}"><i
                                                class="fas fa-pen-square"></i></a>
                                        <form action="{{ route('brand.destroy', $brand->id) }}" method="post"
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
                                    <td colspan="7" style="text-align: center; color: grey">No brand found</td>
                                </tr>
                                @endif
                            </table>
                            {{ $brands->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
