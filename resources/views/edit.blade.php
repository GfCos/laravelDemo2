<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<body>
<form method="post" action="{{ route('modifier.personne', ['id' => $person->id]) }}">
    @csrf
    @method('PATCH')
    <input type="text" name="first_name" value="{{ $person->first_name }}"/><br>
    <input type="text" name="last_name" value=" {{ $person->last_name}} "/>
    <input type="submit" value="modifier">
</form>
</body>
</html>