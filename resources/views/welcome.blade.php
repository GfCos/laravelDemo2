<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titre }}</title>
</head>
<body>
@if (session('flash'))
    <h1>
        {{ session('flash')['message'] }} {{ session('flash')['type'] }}
</h1>
@endif
    <a href="{{ route('ajouter.personne') }}">AJOUTER</a></br>
@foreach ($persons as $person)
    <p>{{ $person->first_name }} {{ $person->last_name }} <a href="{{ route('editer.personne', ['id' => $person->id]) }}">edit</a> <a href="{{ route('effacer.personne', ['id' => $person->id]) }}">effacer</a></p>
@endforeach
</body>
</html>