,<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <table border='1'>
      @foreach ($donos as $dono)
        <tr>
          <td>{{ $dono->id }}</td>
          <td>{{ $dono->nome }}</td>
          <td><a href='/editar/dono/{{ $dono->id }}'>Editar</a>
              <a href='/remover/dono/{{ $dono->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/dono">Inserir Nova</a>
  </body>
</html>
