<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usúarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        @foreach ($users as $user)
        <tbody>
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                {{-- <a href="">Ver Usúarios</a> --}}
                <button type="button" class="btn btn-primary margin " name="user" value="">Ver Usúarios</button>
                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="user" value="{{ $user->id }}">
                    {{-- <input type="submit" value="remover"> --}}
                    <button type="submit" class="btn btn-danger" value="remover">Remover</button>
                </form>
          </tr>
        </tbody>

        @endforeach
      </table>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</html>
