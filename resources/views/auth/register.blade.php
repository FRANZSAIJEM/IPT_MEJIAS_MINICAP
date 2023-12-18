@extends('base')

@section('content')
<div class="container p-5" style="max-width: 750px; margin-bottom: 277px;">



    <div class="card shadow music-studio-card">
        <div class="card-header">
            <h1 class="text-center music-studio-text">
                <i class="fas fa-user-plus"></i> Register for the Addon Bazzar
            </h1>
        </div>
        <div class="card-body">
            <form action="{{ '/register' }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="name" class="music-studio-label">
                        <i class="fas fa-user"></i> Full Name
                    </label>
                    <input type="text" name="name" id="name" class="form-control music-studio-input" placeholder="Full Name">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="music-studio-label">
                        <i class="fas fa-envelope"></i> Email
                    </label>
                    <input type="email" name="email" id="email" class="form-control music-studio-input" placeholder="Email">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="music-studio-label">
                        <i class="fas fa-lock"></i> Password
                    </label>
                    <input type="password" name="password" id="password" class="form-control music-studio-input" placeholder="Password">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="music-studio-label">
                        <i class="fas fa-lock"></i> Confirm Password
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control music-studio-input" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex mt-5">
                    <div class="flex-grow-1">
                        <a href="{{ '/' }}" class="music-studio-link">
                            <i class="fas fa-sign-in-alt"></i> Already have an account
                        </a>
                    </div>
                    <button class="btn btn-primary music-studio-button">
                        <i class="fas fa-user-plus"></i> Register
                    </button>
                </div>
            </form>
        </div>
    </div>





</div>

<style>
    .music-studio-card {
        background-color: #1e1e1e;
        color: #fff;
    }

    .music-studio-text {
        color: #61dafb; /* or any other color you prefer */
    }

    .music-studio-label {
        color: #61dafb;
    }

    .music-studio-input {
        background-color: #333;
        color: #fff;
        border: 1px solid #61dafb;
    }

    .music-studio-link {
        color: #61dafb;
    }

    .music-studio-button {
        background-color: #61dafb;
        border: 1px solid #61dafb;
        color: #fff;
    }

    .music-studio-button:hover {
        background-color: #4fa3d1; /* lighter shade for hover effect */
        border: 1px solid #4fa3d1;
    }

    </style>
@endsection
