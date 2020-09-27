<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Cadastrar Vacina</h1>
    <form action="/adicionar/vacina" method="post">
      {{ csrf_field() }}
      Historico id: <input type="text" name="historico_id" />
      <br>
      Vacina: <input type="text" name="vacina" />
      <br>
      Data: <input type="date" name="data" />
      <br>
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
