@extends('layouts.backend.master')
@section('base.title', 'Edit Category')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="section-header">
        <h1>Edit Category</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('category.index') }}">Category List</a></div>
            <div class="breadcrumb-item">Edit Category</div>
        </div>
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Category</h4>
                        <a href="{{ route('category.index') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> All Category</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                                <form action="{{ route('category.update', [$category->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}">
                                            @error('name')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="position_id">Category Position</label>
                                            <select class="form-control" name="position_id" id="position_id">
                                                <option disabled selected>Select Category Position</option>
                                                @for($i=1; $i<=10; $i++)
                                                    <option value="{{ $i }}" @if($i == $category->position_id) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            @error('position_id')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" id="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div style="margin: 0 auto; width: 100px; overflow: hidden">
                                                        <img src="{{ asset('images/category/'. $category->image) }}" class="img-fluid" alt="CatImg">
                                                    </div>
                                                </div>
                                            </div>
                                            @error('image')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="4" class="form-control">{{ $category->description }}</textarea>
                                            @error('description')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="featured">Featured</label>
                                            <select class="form-control" name="featured" id="featured">
                                                <option style="display: none" value="{{ $category->featured }}" selected>@if($category->featured == 1) Yes @else no @endif</option>
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
                                                <option style="display: none" value="{{ $category->status }}" selected>@if($category->status == 1) active @else inactive @endif</option>
                                                <option value="1">active</option>
                                                <option value="0">inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                        <div>
                                            <button type="submit" class="btn btn-md btn-primary">Update</button>
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

@push('base.js')
<script>
    $(document).ready(function(){
        $('#description').summernote();
    });
</script>
@endpush