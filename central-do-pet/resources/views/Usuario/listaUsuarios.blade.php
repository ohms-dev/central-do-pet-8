<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<table border='1'>
    @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nome }}</td>
            <td><a href='/editar/usuario/{{ $usuario->id }}'>Editar</a>
                <a href='/remover/usuario/{{ $usuario->id }}'>Remover</a></td>
        </tr>
    @endforeach
</table>
<a href="/adicionar/usuario">Inserir Nova</a>
</body>
</html>
