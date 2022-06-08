<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf

        nome: <input type="text" name="name">
        email: <input type="email" name="email">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>