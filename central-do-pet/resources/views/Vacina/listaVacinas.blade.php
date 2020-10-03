<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <table border='1'>
      @foreach ($vacinas as $vacina)
        <tr>
          <td>{{ $vacina->id }}</td>
          <td>{{ $vacina->historico_id }}</td>
          <td>{{ $vacina->vacina }}</td>
            <td><a href='/editar/vacina/{{ $vacina->id }}'>Editar</a>
              <a href='/remover/vacina/{{ $vacina->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/vacina">Inserir Nova</a>
  </body>
</html>
