<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Editar Pet</h1>
    <form action="/atualizar/pet" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$pet->id}}">
      Nome: <input type="text" name="nome" />
      <br>
      Sexo: <select name="sexo">
            <option value="Macho">Macho</option>
            <option value="Femea">Femea</option>
        </select>
      <br>
      Castrado: <select name="castrado">
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
        </select>
      <br>
      Necessidades Especiais: <input type="text" name="necessidades_especiais" />
      <br>
      Data de nascimento: <input type="date" name="data_de_nascimento" />
      <br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
