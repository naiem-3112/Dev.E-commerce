@extends('layouts.backend.master')
@section('base.title', 'Reset Password')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1>Reset Password</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('admin.setting') }}">Settings</a></div>
        <div class="breadcrumb-item">Reset Password</div>
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
                        <div class="card-header"><h4>Reset Password</h4></div>
          
                        <div class="card-body">
                          <p class="text-muted">We will send a link to reset your password</p>
                          <form method="POST" action="{{ route('password.update') }}">
                              @csrf
                              <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                              name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
          
                            <div class="form-group">
                              <label for="password">New Password</label>
                              <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" tabindex="2" required>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                              <div id="pwindicator" class="pwindicator">
                                <div class="bar"></div>
                                <div class="label"></div>
                              </div>
                            </div>
          
                            <div class="form-group">
                              <label for="password-confirm">Confirm Password</label>
                              <input id="password-confirm" type="password" class="form-control" name="confirm-password" tabindex="2" required>
                            </div>
          
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Reset Password
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
