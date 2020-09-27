<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Editar Transfusao</h1>
<form action="/atualizar/transfusao" method="post">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$transufsao->id}}">
    Historido Id: <input type="text" name="Historico_id" />
    <br>
    Data: <input type="text" name="data" />
    <br>
    <input type="submit" value="atualizar" />
</form>
</body>
</html>
