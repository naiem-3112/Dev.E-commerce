@extends('layouts.backend.master')
@section('base.title', 'Create Category')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category List</a>
                        </li>
                        <li class="breadcrumb-item active">Create Category</li>
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
                                <h3 class="card-title">Create Category</h3>
                                <a href="{{ route('category.index') }}" class="btn btn-primary">All Category</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                                            @error('name')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="position_id">Category Position</label>
                                            <select class="form-control" name="position_id" id="position_id">
                                                <option disabled selected>Select Category Position</option>
                                                @for($i=1; $i<=10; $i++)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('position_id')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Choose file</label>
                                            </div>
                                            @error('image')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter Description"></textarea>
                                            @error('description')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="featured">Featured</label>
                                            <select class="form-control" name="featured" id="featured">
                                                <option style="display: none" selected>Select Featured</option>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            @error('featured')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option style="display: none" selected>Select Status</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                            @error('status')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                                            <a href="{{ route('category.index') }}" class="btn btn-md btn-info">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
