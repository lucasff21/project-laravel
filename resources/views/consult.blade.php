<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
      {{$user->name}} ||||| {{$user->email}} ||||| {{$user->cpf}} <a href="/edit/{{$user->id}}">ATUALIZAR</a>
       <BR> <BR>

        <form action="/consult/{{$user->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submite">DELETAR</button>
        </form>

    @endforeach
    <br>
    <a href="/index">VOLTAR</a>
</body>
</html>