@extends('layouts.backend.master')
@section('base.title', 'Edit Language')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>Edit Language</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('language.index') }}">Language List</a></div>
        <div class="breadcrumb-item">Edit Language</div>
    </div>
</div>
<!-- /.content-header -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Language</h4>
                        <a href="{{ route('language.index') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> All Language</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                            <form action="{{ route('language.update', [$language->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Language Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $language->name }}">
                                        @error('name')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control" name="code" id="code"
                                            value="{{ $language->code }}">
                                        @error('code')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option style="display: none" value="{{ $language->status }}" selected>
                                                @if($language->status == 1) active @else inactive @endif</option>
                                            <option value="1">active</option>
                                            <option value="0">inactive</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                    @enderror
                                    <div>
                                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                                        <a href="{{ route('language.index') }}" class="btn btn-md btn-info">Back</a>
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
    $(document).ready(function () {
        $('#description').summernote();
    });

</script>
@endpush
