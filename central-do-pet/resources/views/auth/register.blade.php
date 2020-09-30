<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello</title>
    <head>
<body>
    @if (App\Models\User::all()->isEmpty())
<h1>Registrar usuario</h1>
<form action="/adicionar/user" method="post">
    {{ csrf_field() }}
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
        <option value="Administrador">Administrador</option>
    </select>
    <br>
    Endereco: <input type="text" name="endereco" />
    <br>
    Data de nascimento: <input type="date" name="data_de_nascimento" />
    <br>
    Senha: <input type="password" name="password" />
    <br>
    <input type="submit" value="cadastrar" />
    @error('name')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('sexo')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('contato')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('data_de_nascimento')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('funcao')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('endereco')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('email')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
    @error('password')
    <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
    @enderror
</form>
@endif
</body>
</html>
