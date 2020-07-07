@extends('layouts.backend.base')
@section('base.content')

@include('layouts.backend.partial.header')

@include('layouts.backend.partial.sidebar')

<div class="main-content">
    <section class="section">
        @yield('master.content')
    </section>
</div>


<!-- /.Footer -->
@include('layouts.backend.partial.footer')

@endsection
