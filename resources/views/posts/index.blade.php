@extends('layout.app')

@section('title', 'News')

@section('content')

    <div class="row row-cols-1 bg-dark">
        @foreach ($posts as $post)

            <div class="col ">
                <div class="card shadow-lg p-4 p-md-5 mb-5 ">

                    <h1 class="display-5 fw-bolder text-dark mb-4">{{ $post->title }}</h1>

                    <div class="small text-muted mb-4 d-flex">
                        <span class="fw-semibold text-white h4">
                            <i class="bi bi-tag-fill"></i> {{ $post->category->name ?? 'Uncategorized' }}
                        </span>
                    </div>

                    <div class="text-body text-white border-top pt-4 fs-5">
                        {!! nl2br(e($post->content)) !!}
                    </div>

                    <div class="mt-4 pt-3 border-top">
                        <a href="{{ route('home.home') }}" class="text white btn btn-outline-white btn-sm fw-semibold">
                            ← Return to Home Page
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-3">
        {{ $posts->links('pagination::bootstrap-5') }}
    </div>

@endsection
