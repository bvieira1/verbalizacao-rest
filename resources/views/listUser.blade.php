<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Usúario</title>
</head>

<body>

    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>
    <p>{{ date('d/m/Y', strtotime($user->created_at)) }}</p>

</body>

</html>
