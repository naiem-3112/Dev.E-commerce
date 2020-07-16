@extends('layouts.backend.master')
@section('base.title', 'Forgot Password')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>Forgot Password</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.setting') }}">Settings</a></div>
        <div class="breadcrumb-item">Forgot Password</div>
    </div>
</div>
<!-- /.content-header -->

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="card">
                    <!-- /.card-header -->

                    <div class="card card-primary">
                        <div class="card-header"><h4>Forgot Password</h4></div>
          
                        <div class="card-body">
                          <p class="text-muted">We will send a link to reset your password</p>
                          <form method="POST" action="{{ route('password.email') }}">
                              @csrf
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                              @error('email')
                                        <div class="alert alert-danger mt-2 mb-2">{{ $message }}</div>
                              @enderror
                            </div>
          
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Send Password Reset Link
                              </button>
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
