<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Cadastrar Dono</h1>
    <form action="/adicionar/dono" method="post">
      {{ csrf_field() }}
      Nome: <input type="text" name="nome" />
      <br>
      CPF: <input type="text" name="cpf" />
      <br>
      Pet id: <input type="text" name="pet_id" />
      <br>
      Sexo: <input type="text" name="sexo" />
      <br>
      Contato: <input type="text" name="contato" />
      <br>
      E-mail: <input type="text" name="email" />
      <br>
      Endereço: <input type="text" name="endereco" />
      <br>
      Data de nascimento: <input type="date" name="data_de_nascimento" />
      <br>
      <input type="submit" value="cadastrar" />
        @error('nome')
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
        @error('pet_id')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
        @error('cpf')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
    </form>
  </body>
</html>
