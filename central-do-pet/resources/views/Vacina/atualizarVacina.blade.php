<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <h1>Editar Vacina</h1>
    <form action="/atualizar/vacina" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $vacina->id }}">
      Historico id: <input type="text" name="historico_id" />
      <br>
      Vacina: <input type="text" name="vacina" />
      <br>
      Data: <input type="date" name="data" />
      <br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
