@extends('layouts.backend.base')
@section('base.content')

    @include('layouts.backend.partial.header')

    @include('layouts.backend.partial.sidebar')

    <div class="wrapper">
        <div class="content-wrapper">
            @yield('master.content')
        </div>
    </div>
    <!-- /.Footer -->
    @include('layouts.backend.partial.footer')

@endsection



