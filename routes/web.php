<?php

/*Creare un nuovo progetto laravel con `laravel new`

Il progetto deve sfruttare gli argomenti visti a lezione:

- Rotte statiche;
- Rotte Parametriche;
- Viste;
- Imlementazione bootstrap da CDN
- Controller.
- Rotte parametriche
- Viste dinamiche 
- Passaggio di parametri
- Ricerca dentro array con errore se non presente
-------

Crea un sito per un aereoporto con le seguenti rotte :

- Homepage (es. lista di tutti i voli del giorno in partenza e clicabili);
- Pagina di dettaglio (al click sul singolo volo voglio vedere i dettagli);
  
Usa questo array o creane tu uno a piacere:

```
[ 
        [
         'id' => 1,
         'destination' => 'Torino',
         'time' => [ 
            'departure' => '11:30',
            'arrival' => '15:00',
         ],
         'cover' => "https://st.depositphotos.com/1022597/3251/i/600/depositphotos_32515789-stock-photo-turin-view.jpg"
       ],
       [
         'id' => 2,
         'destination' => 'Roma',
         'time' => [ 
            'departure' => '09:30',
            'arrival' => '11:00',
         ],
         'cover' => "https://www.fieraroma.it/wp-content/uploads/2022/10/fontana-trevi-roma.jpg"
       ],
       [
         'id' => 3,
         'destination' => 'Napoli',
         'time' => [ 
            'departure' => '17:30',
            'arrival' => '19:00',
         ],
         'cover' => "https://www.mardeisargassi.it/wp-content/uploads/2018/12/napoli-citt%C3%A0.jpg"
       ], 
       [
         'id' => 4,
         'destination' => 'Milano',
         'time' => [ 
            'departure' => '19:30',
            'arrival' => '23:00',
         ],
         'cover' => "https://i0.wp.com/www.diariodalmondo.com/wp-content/uploads/2021/12/Duomo-di-Milano-diario-dal-mondo.jpg?fit=1250%2C938&ssl=1"
        ],
       ];
```

------
TIPS: Usa sempre il flusso logico Rotta -> Controller -> view */



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::post('/contact', [PageController::class, 'send']);
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [PageController::class, 'homepage']);
Route::get('/arrivals', [PageController::class, 'arrivals']);
Route::get('/departures', [PageController::class, 'partenze']);
Route::get('/departures/{id}', [PageController::class, 'detail']);


/* 
Route::get('/departures', function () {
    $voli = [
        [
            'id' => 1,
            'destination' => 'Torino',
            'time' => [
                'departure' => '11:30',
                'arrival' => '15:00',
            ],
            'cover' => "https://st.depositphotos.com/1022597/3251/i/600/depositphotos_32515789-stock-photo-turin-view.jpg"
        ],
        [
            'id' => 2,
            'destination' => 'Roma',
            'time' => [
                'departure' => '09:30',
                'arrival' => '11:00',
            ],
            'cover' => "https://www.fieraroma.it/wp-content/uploads/2022/10/fontana-trevi-roma.jpg"
        ],
        [
            'id' => 3,
            'destination' => 'Napoli',
            'time' => [
                'departure' => '17:30',
                'arrival' => '19:00',
            ],
            'cover' => "https://www.mardeisargassi.it/wp-content/uploads/2018/12/napoli-citt%C3%A0.jpg"
        ],
        [
            'id' => 4,
            'destination' => 'Milano',
            'time' => [
                'departure' => '19:30',
                'arrival' => '23:00',
            ],
            'cover' => "https://i0.wp.com/www.diariodalmondo.com/wp-content/uploads/2021/12/Duomo-di-Milano-diario-dal-mondo.jpg?fit=1250%2C938&ssl=1"
        ],

    ];
    return view('departures', ['voli' => $voli]);

    foreach ($partenze as $partenza) {
        if ($id == $partenza['id']) {
            return view('detail', ['partenze' => $volo]);
        }
    }
    abort(404);;
});
*/