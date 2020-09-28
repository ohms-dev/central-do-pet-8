<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
<h1>Cadastrar Transfusao</h1>
<form action="/adicionar/transfusao" method="post">
    {{ csrf_field() }}
    Historico Id: <input type="text" name="historico_id" />
    <br>
    Data: <input type="date" name="data" />
    <br>
    <input type="submit" value="cadastrar" />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <script type='text/javascript'>alert('{{ $error }}');</script>
                @endforeach
            </ul>
        </div>
    @endif
</form>
</body>
</html>
