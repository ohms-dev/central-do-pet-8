<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<table border='1'>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->funcao}}</td>
            <td><a href='/editar/user/{{ $user->id }}'>Editar</a>
                <a href='/remover/user/{{ $user->id }}'>Remover</a></td>
        </tr>
    @endforeach
</table>
<a href="/adicionar/user">Inserir Nova</a>
</body>
</html>
