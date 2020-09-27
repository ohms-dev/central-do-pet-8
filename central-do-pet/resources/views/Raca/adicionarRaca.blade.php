<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Cadastrar Raça</title>
    <head>
<body>
<h1>Cadastrar Raça</h1>
<form action="/adicionar/raca" method="post">
    {{ csrf_field() }}
    Pet id: <input type="text" name="pet_id" />
    <br>
    Especie: <input type="text" name="especie" />
    <br>
    Porte: <input type="text" name="porte" />
    <br>
    Cor: <input type="text" name="cor" />
    <br>
    <input type="submit" value="cadastrar" />
</form>
</body>
</html>
