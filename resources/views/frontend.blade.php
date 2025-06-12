<!DOCTYPE html>
<html>
<head>
    <title>Tugas Week 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 500px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1>Tugas Week 11</h1>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <a href="{{ url('/about') }}" class="btn btn-outline-secondary m-2" target="_blank">About</a>
                    <a href="{{ url('/bootstrap1') }}" class="btn btn-outline-secondary m-2" target="_blank">Bootstrap 1</a>
                    <a href="{{ url('/contact') }}" class="btn btn-outline-secondary m-2" target="_blank">Contact</a>
                    <a href="{{ url('/first') }}" class="btn btn-outline-secondary m-2" target="_blank">First</a>
                    <a href="{{ url('/frontend') }}" class="btn btn-outline-secondary m-2" target="_blank">Frontend</a>
                    <a href="{{ url('/indexETS') }}" class="btn btn-outline-secondary m-2" target="_blank">IndexETS</a>
                    <a href="{{ url('/js1') }}" class="btn btn-outline-secondary m-2" target="_blank">JS 1</a>
                    <a href="{{ url('/latihan-buat-ets') }}" class="btn btn-outline-secondary m-2" target="_blank">Latihan Buat ETS</a>
                    <a href="{{ url('/latihan_layout') }}" class="btn btn-outline-secondary m-2" target="_blank">Latihan Layout</a>
                    <a href="{{ url('/services') }}" class="btn btn-outline-secondary m-2" target="_blank">Services</a>
                    <a href="{{ url('/somethincOfficial') }}" class="btn btn-outline-secondary m-2" target="_blank">Somethinc Official</a>
                    <a href="{{ url('/template1') }}" class="btn btn-outline-secondary m-2" target="_blank">Template 1</a>
                    <a href="{{ url('/testimonial') }}" class="btn btn-outline-secondary m-2" target="_blank">Testimonial</a>
                    <a href="{{ url('/validasi1') }}" class="btn btn-outline-secondary m-2" target="_blank">Validasi 1</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
