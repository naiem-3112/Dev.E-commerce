@extends('layouts.backend.master')
@section('base.title', 'Edit General Setting')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit General Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('general.index') }}">General Setting List</a>
                        </li>
                        <li class="breadcrumb-item active">Edit General Setting</li>
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
                                <h3 class="card-title">Edit General Setting - {{ $settingGeneral->name }}</h3>
                                <a href="{{ route('general.index') }}" class="btn btn-primary">All General Setting</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                                <form action="{{ route('general.update', [$settingGeneral->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="welcome_msg">Welcome Message</label>
                                            <input type="text" class="form-control" name="welcome_msg" id="welcome_msg" value="{{ $settingGeneral->welcome_msg }}">
                                            @error('welcome_msg')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="logo">Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="logo" id="logo">
                                                        <label class="custom-file-label" for="logo">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div style="margin: 0 auto; width: 100px; overflow: hidden">
                                                        <img src="{{ asset('logo/website/'. $settingGeneral->logo) }}" class="img-fluid" alt="CatImg">
                                                    </div>
                                                </div>
                                            </div>
                                            @error('logo')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="cell">Cell</label>
                                            <input type="text" class="form-control" name="cell" id="cell" value="{{ $settingGeneral->cell }}">
                                            @error('cell')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="moto">Website Moto</label>
                                            <textarea name="moto" id="moto" rows="4" class="form-control">{{ $settingGeneral->moto }}</textarea>
                                            @error('moto')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="copyright">Copyright</label>
                                            <input type="text" class="form-control" name="copyright" id="copyright" value="{{ $settingGeneral->copyright }}">
                                            @error('copyright')
                                            <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-md btn-primary">Update</button>
                                            <a href="{{ route('general.index') }}" class="btn btn-md btn-info">Back</a>
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
