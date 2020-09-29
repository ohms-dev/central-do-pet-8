<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <table border='1'>
      @foreach ($historicos as $historico)
        <tr>
            <td>{{ $historico->id }}</td>
            <td>{{ $historico->id }}</td>
            <td>{{ $historico->alergias}}</td>
            <td><a href='/editar/historico/{{ $historico->id }}'>Editar</a>
                <a href='/remover/historico/{{ $historico->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/historico">Inserir Nova</a>
  </body>
</html>
