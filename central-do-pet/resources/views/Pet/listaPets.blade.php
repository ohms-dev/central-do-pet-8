<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
  <h1>Listar Pets </h1>
  @auth
    <table border='1'>
      @foreach ($pets as $pet)
        <tr>
          <td><a href=' /view/pet/{{$pet->id}}'>{{$pet->id}}</a></td>
          <td>{{ $pet->rga }}</td>
          <td>{{ $pet->nome }}</td>
            <td>
                <a href='/view/pet/{{ $pet->id }}'>Visualizar</a>

                <a href='/editar/pet/{{ $pet->id }}'>Editar</a>
                <a href='/remover/pet/{{ $pet->id }}'>Remover</a>
            </td>

        </tr>
      @endforeach
    </table>
    <a href="/adicionar/pet">Inserir Nova</a>
  @endauth
  @guest
  <table border='1'>
    @foreach ($pets as $pet)
      @if ($pet->adotado==1)
      <tr>
        <td>{{ $pet->rga }}</td>
        <td>{{ $pet->nome }}</td>
          <td>
              <a href='/view/pet/{{ $pet->id }}'>Visualizar</a>
          </td>

      </tr>
      @endif
    @endforeach
  </table>
  @endguest
  </body>
</html>
