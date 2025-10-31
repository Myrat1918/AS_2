<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Football News Center</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <style>
        body {
            
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('') no-repeat center center fixed;
            background-size: cover;
        }
    </style>

</head>

<body class="text-white">
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center p-4 p-md-5 bg-dark bg-opacity-75 rounded shadow-lg">

                <div class="mb-4">
                    <a href="{{ route('locale', 'tm') }}" class="btn btn-sm btn-outline-light me-2 fw-bold">TM</a>
                    <a href="{{ route('locale', 'ru') }}" class="btn btn-sm btn-outline-light me-2 fw-bold">RU</a>
                    <a href="{{ route('locale', 'en') }}" class="btn btn-sm btn-outline-light fw-bold">EN</a>
                </div>

                <h1 class="display-3 fw-bolder text-warning mb-3">
                    <i class="bi bi-newspaper me-3"></i> NEWS
                </h1>
                <h3 class="text-light mb-5">Buy and View Football News!</h3>

                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                        <a href="{{ route('home.home') }}" class="btn btn-primary w-100 py-3 fw-bold fs-5">
                            Enter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
