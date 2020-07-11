@extends('layouts.backend.master')
@section('base.title', 'Edit Currency')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="section-header">
        <h1>Edit Currency</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('currency.index') }}">Currency List</a></div>
            <div class="breadcrumb-item">Edit Currency</div>
        </div>
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Currency</h4>
                        <a href="{{ route('currency.index') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> All Currency</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                                <form action="{{ route('currency.update', [$currency->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Currency Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $currency->name }}">
                                            @error('name')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="code">Code</label>
                                            <input type="text" class="form-control" name="code" id="code" value="{{ $currency->code }}">
                                            @error('code')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="symbol">Symbol</label>
                                            <input type="text" class="form-control" name="symbol" id="symbol" value="{{ $currency->symbol }}">
                                            @error('symbol')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="conversion_rate">Conversion Rate</label>
                                            <input type="text" class="form-control" name="conversion_rate" id="conversion_rate" value="{{ $currency->conversion_rate }}">
                                            @error('conversion_rate')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option style="display: none" value="{{ $currency->status }}" selected>@if($currency->status == 1) active @else inactive @endif</option>
                                                <option value="1">active</option>
                                                <option value="0">inactive</option>
                                            </select>
                                        </div>
                                        @error('status')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                        @enderror
                                        <div>
                                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                                            <a href="{{ route('currency.index') }}" class="btn btn-md btn-info">Back</a>
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