<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>Un utente ha chiesto di lavorare con noi</h2>
    <p>ecco i suoi dati</p>
    <p>nome {{$user->name}}</p>
    <p>email {{$user->email}}</p>
    <p>corpo {{$body}}</p>
    <p>se vuoi renderlo revisore clicca qui</p>
    <a href="{{route('make.revisor',compact('user'))}}">Rendi revisore</a>
    
</body>
</html>