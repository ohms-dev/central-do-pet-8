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
    Porte: <select name="porte">
        <option value="Grande">Grande</option>
        <option value="Médio">Médio</option>
        <option value="Pequeno">Pequeno</option>
    </select>
    <br>
    Cor: <input type="text" name="cor" />
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
