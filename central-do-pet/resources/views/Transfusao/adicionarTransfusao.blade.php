<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Cadastrar Transfusao</h1>
<form action="/adicionar/transfusao" method="post">
    {{ csrf_field() }}
    Historido Id: <input type="text" name="Historico_id" />
    <br>
    Data: <input type="text" name="data" />
    <br>
    <input type="submit" value="cadastrar" />
</form>
</body>
</html>
