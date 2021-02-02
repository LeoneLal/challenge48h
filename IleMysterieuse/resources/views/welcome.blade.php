<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>L'île Mystérieuse</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/welcome.css">

</head>

<body class="antialiased">
    <!--Liens authentification-->
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="log"><button class="button">Login</button></a>
            @endauth 
            <a href="{{ url('/EnigmeAlgorithmique') }}">Exercices</a>
        @endif
        </div>
        
        


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8  sm:pt-0">
                <!--Enigme 1 : 2            https://we.tl/t-y3jRwVncHP-->
                <img class="hack" src="{{ URL::asset('img/hacker.png')}}" width="200" height="200" />
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <h1>Boss Final :</h1>
                <!--Code reponse finale-->
                <label for="FinalPass">Veuillez entrer le code :</label>
                <input type="text" id="FinalPass" name="FinalPass">
                <input type="submit" value="Envoyer">
                <div class="presentation">
                    <!--Texte de présentation du projet-->
                    <p>Bonjour et bienvenue sur l'île Mystérieuse ! On espère que vous êtes bien réveillé, car chaque détail compte. Soyez attentifs, gardez les yeux grands ouverts.<span id="ref">.</span>. car les indices peuvent être n'importe où ! Arriverez-vous à percer le mystère qui règne ici ? Tout repose sur vous ! Bon courage..
                    </p>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
