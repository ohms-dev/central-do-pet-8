<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
</head>
<body>
<h1>Pet</h1>
<table border='1'>
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->rga }}</td>
            <td>{{ $pet->nome }}</td>
            <td>{{ $pet->sexo }}</td>
            <td>{{ $pet->castrado }}</td>
            <td>{{ $pet->data_de_nascimento }}</td>
            @if($pet->dono_id == null)
                <td> {{ 'Sem dono' }} </td>

            @endif
            @if($pet->dono_id != null)
                <td> {{ $pet->dono_id  }} </td>

            @endif

            <td>@if($historico != null)
                <a href='/view/historico/{{$historico->id}}'>Histórico</a>
            @endif
            @if($historico == null)
                <a href="/adicionar/historico">Criar histórico</a>
            @endif
            </td>
        </tr>
</table>
</body>
</html>
