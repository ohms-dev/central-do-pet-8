<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Cadastrar Pet</h1>
    <form action="/adicionar/pet" method="post">
      {{ csrf_field() }}
      Nome: <input type="text" name="nome" />
      <br>
      Sexo: <input type="text" name="sexo" />
      <br>
      Castrado: <input type="text" name="castrado" />
      <br>
      Necessidades Especiais: <input type="text" name="necessidades_especiais" />
      <br>
      Data de nascimento: <input type="date" name="data_de_nascimento" />
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
        @error('castrado')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
        @error('data_de_nascimento')
        <span class="invalid-feedback" role="alert">
            <script type='text/javascript'>alert('{{ $message }}');</script>
        </span>
        @enderror
      <br>
      <input type="submit" value="atualizar" />
    </form>
  </body>
</html>

