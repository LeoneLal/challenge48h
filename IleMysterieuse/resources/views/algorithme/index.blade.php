<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="log"><button class="button">Login</button></a>
            @endauth
        </div>
        @endif
    </div>
    <form method="GET" action="{{ route('exo1') }}">
        @csrf
        <h2>Réponse pour le premier exercice</h2>
        <label for="">Heures : </label>
        <input name="hours" type="text"/>

        <label for="">Minutes : </label>
        <input name="minutes" type="text"/>

        <button type="submit">Envoyer</button>
    </form>
    @isset($result)
        <div class="result">
            <p>{{ $result }}</p>
        </div>
    @endisset
</body>
</html>