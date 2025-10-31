@extends('layout.app')

<nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand fw-bold text-white fs-5">
            ⚽ FUTBOL NEWS
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a href="{{ url('home.home') }}" class="nav-link text-secondary">Home Page</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('teams.index') }}" class="nav-link text-secondary">Teams</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link text-secondary">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
