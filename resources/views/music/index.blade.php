@extends('layout')

@section('content')

    <div class="mb-4">
        <h4 class="mb-3">Music</h4>
        <a class="btn btn-outline-secondary btn-sm mb-3" href="{{ route('music.create') }}">Create music</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @foreach ($musics as $music)
        <div class="card mb-3">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="card-title mb-1">{{ $music->name }}</h5>
                    <p class="card-text text-muted mb-0" style="font-size: 0.9em; line-height: 1.3;">
                        {{ $music->artist }}<br>
                        {{ $music->genre }}
                    </p>
                </div>
                <div>
                    <div class="dropdown">
                        <button class="btn btn-light btn-sm dropdown-toggle border" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                            <li><a class="dropdown-item" href="{{ route('music.edit', $music->id) }}">Edit</a></li>
                            <li>
                                <form action="{{ route('music.destroy', $music->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection