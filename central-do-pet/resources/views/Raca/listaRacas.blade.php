<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<table border='1'>
    @foreach ($racas as $raca)
        <tr>
            <td>{{ $raca->id }}</td>
            <td>{{ $raca->nome }}</td>
            <td><a href='/editar/raca/{{ $raca->id }}'>Editar</a>
                <a href='/remover/raca/{{ $raca->id }}'>Remover</a></td>
        </tr>
    @endforeach
</table>
<a href="/adicionar/raca">Inserir Nova</a>
</body>
</html>
