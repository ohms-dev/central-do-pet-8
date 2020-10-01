<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Editar Dono</h1>
    <form action="/atualizar/dono" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$dono->id}}">
      Nome: <input type="text" name="nome" />
      <br>
      CPF: <input type="text" name="cpf" />
      <br>
      Pet id: <input type="text" name="pet_id" />
      <br>
      Sexo: <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Não binário">Não binário</option>
            <option value="Outro">Outro</option>
            <option value="Não informar">Não informar</option>
        </select>
      <br>
      Contato: <input type="text" name="contato" />
      <br>
      E-mail: <input type="text" name="email" />
      <br>
      Endereço: <input type="text" name="endereco" />
      <br>
      Data de nascimento: <input type="date" name="data_de_nascimento" />
      <br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>
