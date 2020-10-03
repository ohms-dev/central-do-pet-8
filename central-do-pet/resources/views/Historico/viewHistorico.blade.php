<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<h1>Histórico</h1>
<table border='1'>
    <tr>
        <td>{{ $historico->id }}</td>
        <td>{{ $historico->pet_id }}</td>
        <td>{{ $historico->alergias }}</td>
    </tr>
    <tr>
        @foreach($vacinas as $vacina)
            @if($vacina->historico_id == $historico->id)
                <tr>
                    <td>{{$vacina->id}}</td>
                    <td>{{$vacina->vacina}}</td>
                </tr>
            @endif
        @endforeach
    </tr>
</table>
@auth
<a href='/adicionar/vacina'>Adicionar vacina</a>
@endauth
</body>
</html>
