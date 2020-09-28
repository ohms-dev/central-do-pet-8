<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <table border='1'>
      @foreach ($pets as $pet)
        <tr>
          <td>{{ $pet->id }}</td>
          <td>{{ $pet->nome }}</td>
          <td><a href='/editar/pet/{{ $pet->id }}'>Editar</a>
              <a href='/remover/pet/{{ $pet->id }}'>Remover</a></td>
        </tr>
      @endforeach
    </table>
    <a href="/adicionar/pet">Inserir Nova</a>
  </body>
</html>
