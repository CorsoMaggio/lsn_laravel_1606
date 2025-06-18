<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller

{
    public function send(Request $request)
    {
        $request->validate(['email' => ['required', 'email'], 'message' => ['required', 'max:20']]);

        dd($request->all());
    }
    public function homepage()
    {
        return view('welcome');
    }

    public function arrivals()
    {
        return view('arrivals');
    }

    public function partenze()
    {
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
            [
                'id' => 5,
                'destination' => 'Zimbabwe',
                'time' => [
                    'departure' => '12:00',
                    'arrival' => '14:30',
                ],
                'cover' => "https://avgtravels.com/au/wp-content/uploads/sites/4/reason-to-visit-Zimbabwe-1.jpg"
            ]
        ];

        return view('departures', ['voli' => $voli]);
    }

    public function detail($id)
    {
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
            [
                'id' => 5,
                'destination' => 'Zimbabwe',
                'time' => [
                    'departure' => '12:00',
                    'arrival' => '14:30',
                ],
                'cover' => "https://avgtravels.com/au/wp-content/uploads/sites/4/reason-to-visit-Zimbabwe-1.jpg"
            ]
        ];

        foreach ($voli as $volo) {
            if ($volo['id'] == $id) {
                return view('detail', ['volo' => $volo]);
            }
        }

        abort(404);
    }
}
