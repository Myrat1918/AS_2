@if (request()->is(''))
    <div class="container-fluid vh-100">
        <div class="text-center my-5">
            <h1 class="display-1 text-danger">404</h1>
            <div>Oops! Page not found.</div>
        </div>
    </div>
@else
@extends('layout.app')

@section('title', '404 |')
@section('content')
    @include('nav.nav')
    <div class="container-xxl">
        <div class="text-center text-dark mb-5 py-5"> <div class="d-md-none d-block fw-bold" style="font-size: 145px;">4<span class="text-warning">0</span>4</div>
            <div class="d-none d-md-block fw-bold" style="font-size: 265px;">4<span class="text-warning">0</span>4</div>
            <div class="h2 fw-bold" style="margin-top: -40px;">Oops! Page not found.</div>
            <div class="h6 fw-normal text-secondary mt-2 mb-4">Let's get to where you need to be.</div> <a href="{{ route('home.home') }}" class="btn btn-warning fw-bold">Back to home</a> </div>
    </div>
@endsection
@endif
