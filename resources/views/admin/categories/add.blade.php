@extends('layout.site')

@section('titulo','Categorias')

@section('conteudo')

  <div class="row ">
    <div class="col-lg-6 mx-auto">
      <div class="card">
        <div class="card-header text-center">
          <h5>Categoria</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.categories.save')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.categories._form')
                <div class="text-center">
                    <button class="btn bg-gradient-info w-100 mt-4 mb-0">Salvar</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection
