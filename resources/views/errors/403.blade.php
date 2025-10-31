<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 | Forbidden</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body class='bg-light'>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="text-center p-4">
            <div class="display-1 text-danger fw-bold mb-3">403</div>
            <div class="h3 text-dark mb-4">
                FORBIDDEN - Access Denied
            </div>
            <p class="lead text-muted">You are not authorized to view this page.</p>
            <a href="{{ route('home.home') }}" class="btn btn-outline-primary mt-3">Go Back to Home Page</a>
        </div>
    </div>
</body>
</html>
