@extends('layout.app')

@section('title', 'Players List')

@section('content')
<div class="container py-4">
    <h1 class="h3 fw-bold text-light mb-4 border-bottom pb-2">
        <i class="bi bi-people-fill"></i> Players List ⚽
    </h1>


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @forelse ($players as $player)
            <div class="col">
                <div class="card h-100 shadow-lg border-0 bg-dark text-white">
                    <div class="card-body d-flex flex-column">
                        <div class="text-center mb-3">
                            <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
                        </div>

                        <h5 class="card-title text-warning text-center">{{ $player->name }}</h5>
                        <p class="card-text mb-1"><i class="bi bi-flag me-2"></i><strong>Country:</strong> {{ $player->country }}</p>
                        <p class="card-text mb-1"><i class="bi bi-shield-fill-check me-2"></i><strong>Team:</strong> {{ $player->team->name ?? 'No Team' }}</p>
                        <p class="card-text mb-1"><i class="bi bi-person-workspace me-2"></i><strong>Position:</strong> {{ $player->position }}</p>
                        <p class="card-text"><i class="bi bi-calendar-heart me-2"></i><strong>Age:</strong> {{ $player->age }}</p>

                        <div class="mt-auto pt-3">
                            <a href="{{ route('players.index', $player->id) }}"
                               class="btn btn-outline-warning btn-sm w-100 fw-semibold">
                                View Details <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="alert alert-warning text-center">
                    No players available yet 😔
                </div>
            </div>
        @endforelse
    </div>
</div>
@endsection
