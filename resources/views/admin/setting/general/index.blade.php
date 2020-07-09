@extends('layouts.backend.master')
@section('base.title', 'General Setting List')
@section('master.content')
<!-- Content Header (Page header) -->
<div class="section-header">
    <h1> General Setting </h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">General Setting</div>
    </div>
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4> General Setting </h4>
                        @if($settingGeneral->count() == 0)
                        <a href="{{ route('general.create') }}" class="btn btn-icon btn-left btn-primary"><i
                                class="fas fa-plus"></i> Add New</a>
                        @endif
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="p-0 text-center">ID</th>
                                    <th class="p-0 text-center">Welcome Message</th>
                                    <th class="p-0 text-center">Cell</th>
                                    <th class="p-0 text-center">Moto</th>
                                    <th class="p-0 text-center">Copyright</th>
                                    <th class="p-0 text-center">Logo</th>
                                    <th class="p-0 text-center">Action</th>
                                </tr>
                                @if($settingGeneral)
                                <tr>
                                    <th scope="row" class="p-0 text-center">{{ $settingGeneral->id }}</th>
                                    <td class="p-0 text-center">{{ $settingGeneral->welcome_msg }}</td>
                                    <td class="p-0 text-center">{{ $settingGeneral->cell  }}</td>
                                    <td class="p-0 text-center">{{ $settingGeneral->moto }}</td>
                                    <td class="p-0 text-center">{{ $settingGeneral->copyright }}</td>
                                    <td class="p-0 text-center">
                                        <div style="margin: 0 auto; width: 60px; overflow: hidden">
                                            <img class="img-fluid"
                                                src="{{ asset('logo/website/'. $settingGeneral->logo) }}" alt="catImg">
                                        </div>
                                    </td>
                                    <td class="p-0 text-center">
                                        <a title="edit" class="btn btn-sm btn-warning btn-xs"
                                            href="{{ route('general.edit', $settingGeneral->id) }}"><i
                                                class="fas fa-pen-square"></i></a>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="7" style="text-align: center; color: grey">No setting general found
                                    </td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
