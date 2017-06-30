@extends ('templates.template1')
@section ('content')


<div class="container-log">

      <form class="form-signin">
        <h2 class="form-signin-heading">Cadastro</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <label for="inputName" class="sr-only">Nick</label>
        <input type="name" id="inputName" class="form-control" placeholder="Nick" required>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <div class="text-center">
          <button class="btn btn-default" type="submit">Finalizar Registro</button>
        </div>
      </form>

    </div>

    @foreach ($registers as $register )
    <tr>
      <td>{{$register ->nmUsuario}} </td>
      <td>{{$register ->emailUsuario}} </td>
    </tr>
    @endforeach


<style media="screen">
  .container-log {
    width: 350px;
    left:171px;
    position: relative;
    color: #493e37;
  }
  .container-log h2 {
    text-align: center;
    color:#5b729d;
  }

.container-log .form-control {
  margin-bottom: 5px;
  background-color: #3f3744;
  color: white;
}

.container-log .btn-default {
  background-color: #3f3744;
  color:#c8bbb0;
  align-items: center;
}





</style>

@endsection
