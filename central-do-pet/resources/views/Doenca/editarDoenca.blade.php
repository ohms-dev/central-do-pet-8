<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <h1>Editar Doenca</h1>
    <form action="/atualizar/doenca" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $doenca->id }}">
      Nome da doença: <input type="text" name="doenca" value="{{ $doenca->doenca }}"/><br>
      Data que pegou a doença: <input type="date" name="data" value="{{ $doenca->data }}"/><br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
