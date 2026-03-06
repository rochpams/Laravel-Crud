@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <h3 class="mb-4">Edit music</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('music.update', $music->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label text-muted small">Name</label>
                <input type="text" name="name" value="{{ old('name', $music->name) }}" class="form-control" id="name" required>
            </div>
            
            <div class="mb-3">
                <label for="artist" class="form-label text-muted small">Artist</label>
                <input type="text" name="artist" value="{{ old('artist', $music->artist) }}" class="form-control" id="artist" required>
            </div>
            
            <div class="mb-4">
                <label for="genre" class="form-label text-muted small">Genre</label>
                <input type="text" name="genre" value="{{ old('genre', $music->genre) }}" class="form-control" id="genre" required>
            </div>
            
            <div>
                <button type="submit" class="btn btn-dark">Save Music</button>
                <a class="btn btn-link text-danger text-decoration-none ms-2" href="{{ route('music.index') }}">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection