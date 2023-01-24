<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Model-Controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class="bg-dark">

    <main>
        <div class="container py-5">

            <h1 class="text-white">Welcome to the portal to view today's trains </h1>

            <div class="row py-5">

                {{-- foreach for prints all train in db --}}
                @foreach ($trains as $train)

                <div class="col">
                    
                    <div class="card">
                       
                        <div class="card-title text-center">
                            <h2>{{$train->name_agency}}</h2>
                        </div>

                        <div class="card-body px-0">
                            <h3>Treno numero: {{$train->train_code}}</h3>
                            <h4>Giorno: {{date("d/m/Y", strtotime($train->departure_day))}}</h4>
                        </div>
                        
                        {{-- Row for Time Departure and Arrival --}}
                        <div class="row text-center">
                            
                            <div class="col">
                                <h6>Partenza</h6>
                                <h6>{{$train->departure_time}}</h6>
                            </div>
                            
                            <div class="col">
                                <h6>Arrivo</h6>
                                <h6>{{$train->arrival_time}}</h6>
                            </div>
                        </div>

                    </div>
                </div>

                @endforeach

            </div>


        </div>
    </main>

</body>

</html>