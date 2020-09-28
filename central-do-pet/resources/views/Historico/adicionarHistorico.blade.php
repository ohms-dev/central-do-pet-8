<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>Hello</title>
  <head>
  <body>
    <h1>Cadastrar Historico</h1>
    <form action="/adicionar/historico" method="post">
        {{ csrf_field() }}
        Pet Id: <input type="text" name="pet_id" />
        <br>
        Alergias: <input type="text" name="alergias" />
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


