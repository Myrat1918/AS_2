@extends('layout.app')

@section('title', 'Football Teams')

@section('content')
    <h1 class="h3 fw-bold text-dark mb-4 border-bottom pb-2">Football Teams </h1>

    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4">
        @forelse($teams as $team)
            <div class="col">
                <div class="card shadow-sm h-100 text-center border-0 p-3 hover-shadow-lg">

                    <span class="fs-1 d-block mb-3">🛡️</span>

                    <div class="card-body p-0">
                        <h2 class="card-title fs-5 fw-semibold text-dark">{{ $team->name }}</h2>
                        <p class="card-text small text-muted mb-3">{{ $team->city }}</p>

                        <a href="{{ route('players.index') }}" class="btn btn-sm btn-outline-primary fw-semibold mt-2">
                            View
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-muted col-12">No teams have been registered yet.</p>
        @endforelse
    </div>
@endsection
