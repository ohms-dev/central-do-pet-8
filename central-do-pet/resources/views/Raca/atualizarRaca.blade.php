<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Editar Raca</h1>
<form action="/atualizar/raca" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$raca->id}}">
    Pet id: <input type="text" name="pet_id" />
    <br>
    Especie: <input type="text" name="especie" />
    <br>
    Porte: <input type="text" name="porte" />
    <br>
    Cor: <input type="text" name="cor" />
    <br>
    <input type="submit" value="atualizar" />
</form>
</body>
</html>
