<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Matches the very light gray background from your video */
        body { background-color: #fafafa; }
    </style>
</head>
<body>

<div class="w-100 bg-white border-bottom py-3 mb-5">
    <div class="container-fluid">
        <a href="{{ route('music.index') }}" class="text-dark text-decoration-none ms-3 fs-3 fw-semibold">
            Music Gallery
        </a>
    </div>
</div>

<div class="container" style="max-width: 800px;">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>