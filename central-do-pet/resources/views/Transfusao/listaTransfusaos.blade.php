<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<table border='1'>
    @foreach ($transfusaos as $transfusao)
        <tr>
            <td>{{ $transfusao->id }}</td>
            <td>{{ $transfusao->data }}</td>
            <td><a href='/editar/transfusao/{{ $transfusao->id }}'>Editar</a>
                <a href='/remover/transfusao/{{ $transfusao->id }}'>Remover</a></td>
        </tr>
    @endforeach
</table>
<a href="/adicionar/transfusao">Inserir Nova</a>
</body>
</html>
