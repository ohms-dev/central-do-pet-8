<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  </head>
  <body>
    <h1>Editar Doenca</h1>
    <form action="/atualizar/doencas" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $doenca->id }}">
      Nome: <input type="text" name="doenca" value="{{ $doenca->doenca }}"/><br>
        Historico id: <input type="text" name="historico_id" value="{{ $doenca->historico_id }}"/><br>
      Data: <input type="date" name="data" value="{{ $doenca->data }}"/><br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
