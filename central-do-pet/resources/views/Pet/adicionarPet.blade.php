<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Cadastrar Pet</h1>
    <form action="/adicionar/pet" method="post">
      {{ csrf_field() }}
      Nome: <input type="text" name="nome" />
      <br>
      Sexo: <input type="text" name="sexo" />
      <br>
      Castrado: <input type="checkbox" name="castrado" />
      <br>
      Necessidades Especiais: <input type="text" name="necessidades_especiais" />
      <br>
      Data de nascimento: <input type="date" name="data_de_nascimento" />
      <br>
      <input type="submit" value="cadastrar" />
    </form>
  </body>
</html>
