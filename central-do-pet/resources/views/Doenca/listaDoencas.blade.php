<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title></title>
  </head>
  <body>
    <table border='1'>
      @foreach ($doencas as $doenca)
        <tr>
          <td>{{ $doenca->id }}</td>
          <td>{{ $doenca->doenca }}</td>
          <td>{{ $doenca->data }}</td>
          <td><a href='/editar/doencas/{{ $doenca->id }}'>Editar</a> -
              <a href='/remover/doencas/{{ $doenca->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/doencas">Inserir Nova</a>
  </body>
</html>
