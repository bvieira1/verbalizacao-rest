<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usúario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>

    <form action="{{ route('users.store') }}" method="post" class="form">
        @csrf
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputEmail1">Nome do usúario:</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Nome">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">E-mail do usúario:</label>
            <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="E-mail">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label for="exampleInputPassword1">Senha do usúario:</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Cadastrar Usúario</button>
    </form>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</html>
