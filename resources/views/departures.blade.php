<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
   
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
   
    <x-app>
    <x-slot:title>
        Partenze
    </x-slot:title>

   <div class="d-flex justify-content-center"> <h1>Ciao, sei in Partenze.</h1></div>
    <hr>

    <div class="d-flex flex-wrap">
        @foreach ($voli as $volo)
            <x-card>
                <li class="list-group-item">
                    <a href="/departures/{{ $volo['id'] }}">
                        {{ $volo['destination'] }}
                    </a>
                </li>
            </x-card>
        @endforeach
    </div>
</x-app>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>