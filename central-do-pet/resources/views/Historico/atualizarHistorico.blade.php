<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Editar Historico</h1>
    <form action="/atualizar/historico" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$historico->id}}">
      Pet id: <input type="text" name="pet_id" />
      <br>
      Alergias: <input type="text" name="alergias" />
      <br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
