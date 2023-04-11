<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
</head>
<body>
<form method="post" action="ajouter">
    @csrf
    <input type="text" name="first_name"/><br>
    <input type="text" name="last_name"/>
    <input type="submit" value="ajouter">
</form>
</body>
</html>