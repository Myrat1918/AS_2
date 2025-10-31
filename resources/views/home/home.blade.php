@extends('layout.app')

@section('title', 'Latest Football News')

@section('content')
    <h1 class="h3 fw-bold text-dark mb-4 border-bottom pb-2">Latest News 📰</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card h-100 shadow-sm p-4 border-0">
                    <div class="h5 text-secondary pb-2">
                        <i class="bi bi-person-fill pe-2 h5 text-secondary"></i>
                        {{ $post->user->firstname }} {{ $post->user->lastname }}
                    </div>

                    <h4 class="card-title fs-5">
                        <span class="fw-bold">Title:</span> {{ $post->title }}
                    </h4>

                    <div class="text-primary small mb-3">
                        <span class="fw-bold">Category:</span> {{ $post->category->name }}
                    </div>

                    <div class="mt-auto pt-3 border-top">
                        <a href="{{ route('posts.index', $post->id) }}" class="btn btn-sm btn-outline-primary fw-semibold">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
