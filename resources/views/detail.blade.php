<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dettagli Volo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <x-navbar></x-navbar>
    <div class="container mt-5 d-flex justify-content-center">
    
        <div class="card">
            <img src="{{ $volo['cover'] }}" class="card-img-top" alt="cover">
            <div class="card-body">
                <h2 class="card-title">{{ $volo['destination'] }}</h2>
                <p class="card-text">
                    Partenza: {{ $volo['time']['departure'] }} <br>
                    Arrivo: {{ $volo['time']['arrival'] }}
                </p>
            </div>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </body>
    
    </html>
