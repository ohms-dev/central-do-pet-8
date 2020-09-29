<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Editar Transfusão</h1>
<form action="/atualizar/transfusao" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$transfusao->id}}">
    Historico Id: <input type="text" name="historico_id" />
    <br>
    Data: <input type="date" name="data" />
    <br>
    <input type="submit" value="atualizar" />
</form>
</body>
</html>
