@extends('layouts.backend.master')
@section('base.title', 'Vendor List')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Vendor List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Vendor</li>
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
                                <h3 class="card-title">Vendor List</h3>
                                <a href="{{ route('vendor.create') }}" class="btn btn-primary">Create Vendor</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table style="text-align: center" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Vendor Name</th>
                                    <th>Slug</th>
                                    <th>Email</th>
                                    <th>Company Name</th>
                                    <th>contact</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($vendors->count() > 0)
                                    @foreach($vendors as $vendor)
                                        <tr>
                                            <th scope="row">{{ $vendor->id }}</th>
                                            <td>{{ $vendor->name }}</td>
                                            <td>{{ $vendor->slug  }}</td>
                                            <td>{{ $vendor->email }}</td>
                                            <td>{{ $vendor->company_name }}</td>
                                            <td>{{ $vendor->contact }}</td>
                                            <td>
                                                @if($vendor->status == 1) <span class="badge badge-success">Active</span>@else
                                                    <span class="badge badge-danger">Inactive</span> @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-warning btn-xs" href="{{ route('vendor.edit', $vendor->id) }}"><i class="fas fa-pen-square"></i></a>
                                                <form action="{{ route('vendor.destroy', $vendor->id) }}" method="post" style="display: inline-block">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="alert('Are You Sure to DELETE!')" class="btn btn-sm btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="10" style="text-align: center; color: grey">No vendor found</td>
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
