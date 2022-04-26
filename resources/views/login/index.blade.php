@extends('layout.site')

@section('titulo','Categorias')

@section('conteudo')

  <div class="row ">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <h5>Login</h5>
        </div>
        <div class="card-body">
            <form action="{{route('site.login.in')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="" class="form-control">
                </div>
                <div class="text-center">
                    <button class="btn bg-gradient-info w-100 mt-4 mb-0">Entrar</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
