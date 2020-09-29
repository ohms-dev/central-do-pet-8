<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Atualizar usuario</h1>
<form action="/atualizar/user" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$usuario->id}}">
    Nome: <input type="text" name="name" />
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
    Email: <input type="text" name="email">
    <br>
    Função: <select name="funcao">
        <option value="Médico Veterinário">Médico Veterinário</option>
        <option value="Funcionário">Funcionário</option>
    </select>
    <br>
    Endereco: <input type="text" name="endereco" />
    <br>
    Data de nascimento: <input type="date" name="data_de_nascimento" />
    <br>
    Senha: <input type="password" name="password" />
    <br>
    <input type="submit" value="atualizar" />
</form>
</body>
</html>
