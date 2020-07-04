@extends('layouts.backend.master')
@section('base.title', 'General Setting List')
@section('master.content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">General Setting List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">General Setting</li>
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
                                <h3 class="card-title">General Setting List</h3>
                                <a href="{{ route('general.create') }}" class="btn btn-primary">Create General Setting</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table style="text-align: center" class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Welcome Message</th>
                                    <th>Cell</th>
                                    <th>Moto</th>
                                    <th>Copyright</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($settingGeneral)
                                        <tr>
                                            <th scope="row">{{ $settingGeneral->id }}</th>
                                            <td>{{ $settingGeneral->welcome_msg }}</td>
                                            <td>{{ $settingGeneral->cell  }}</td>
                                            <td>{{ $settingGeneral->moto }}</td>
                                            <td>{{ $settingGeneral->copyright }}</td>
                                            <td>
                                                <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                                    <img class="img-fluid" src="{{ asset('logo/website/'. $settingGeneral->logo) }}"
                                                         alt="catImg">
                                                </div>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-warning btn-xs" href="{{ route('general.edit', $settingGeneral->id) }}"><i class="fas fa-pen-square"></i></a>
                                                <form action="{{ route('general.destroy', $settingGeneral->id) }}" method="post" style="display: inline-block">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="alert('Are You Sure to DELETE!')" class="btn btn-sm btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                @else
                                    <tr>
                                        <td colspan="8" style="text-align: center; color: grey">No setting general found</td>
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
