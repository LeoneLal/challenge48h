<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/algo.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('img/hacker.png')}}" alt="" width="30" height="auto">
            </a>
            <div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="log"><button class="button">Login</button></a>
                        @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card-body exercice">
        
        <div class="exo">
            <form method="GET" action="{{ route('exo1') }}">
                @csrf
                <h2>Un conflit, un script JS, une soirée dans un bar</h2>
                <label class="form-label">Heures : </label>
                <input name="hours" class="form-control" type="text"/>

                <label class="form-label">Minutes : </label>
                <input name="minutes" class="form-control" type="text"/>

                <button class="btn-style" type="submit">Envoyer</button>
            </form>
            @isset($result_exo1)
                <div class="result">
                    <p>{{ $result_exo1 }}</p>
                </div>
            @endisset
        </div>
        <div class="exo">
            <form method="GET" action="{{ route('exo2') }}">
                @csrf
                <h2>Tout se finit par un Bucket</h2>
                <label class="form-label"> Période en années : </label>
                <input name="date" type="text" class="form-control"/>

                <button class="btn-style" type="submit">Envoyer</button>
            </form>
            @isset($result_exo2)
                <div class="result">
                    <p>{{ $result_exo2 }}</p>
                </div>
            @endisset
        </div>
    </div>
</body>
</html>