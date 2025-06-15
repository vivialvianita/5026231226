@extends('template')

@section('content')
<head>
    <title>My Links</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('/background.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        .page-title {
            font-weight: 600;
            color: #333;
            text-shadow: 1px 1px 2px #007bff(0,0,0,0.1);
        }

        .card-custom {
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 16px #007bff(0,0,0,0.1);
        }

        .btn-custom {
            border-radius: 8px;
            border-width: 1.5px;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background-color: #007bff;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="page-title">My Links</h1>
        </div>

        <div class="card card-custom shadow-sm p-4">
            <div class="d-flex flex-wrap justify-content-center">
                <a href="{{ url('/bootstrap1') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Bootstrap</a>
                <a href="{{ url('/first') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">First</a>
                <a href="{{ url('/frontend') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Frontend</a>
                <a href="{{ url('/indexETS') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">ETS</a>
                <a href="{{ url('/js1') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Calculator</a>
                <a href="{{ url('/latihan_layout') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Layout</a>
                <a href="{{ url('/somethincOfficial') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">LinkTree</a>
                <a href="{{ url('/template') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Template</a>
                <a href="{{ url('/validasi') }}" class="btn btn-outline-secondary btn-custom m-2" target="_blank">Validation</a>
            </div>
        </div>
    </div>
</body>
@endsection

