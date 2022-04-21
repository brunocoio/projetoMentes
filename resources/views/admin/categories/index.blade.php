@extends('layout.site')

@section('titulo','Categorias')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header pb-0 px-3">
            <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Categorias</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <a class="btn btn-link text-success px-3 mb-0" href="{{route('admin.categories.add')}}"><i class="fas fa-circle-plus text-success me-2" aria-hidden="true"></i>Adicionar</a>
                </div>
              </div>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            @foreach ($registers as $register)
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">{{$register->id}}</h6>
                    <span class="mb-2 text-xs">Nome: <span class="text-dark font-weight-bold ms-sm-2">{{$register->name}}</span></span>
                    <span class="mb-2 text-xs">Tipo: <span class="text-dark ms-sm-2 font-weight-bold">{{$register->type}}</span></span>
                  </div>
                  <div class="ms-auto text-end">
                    <a class="btn btn-link text-danger px-3 mb-0" href="{{route('admin.categories.delete',$register->id)}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0" href="{{route('admin.categories.edit',$register->id)}}"><i class="fas fa-pencil-alt me-2" aria-hidden="true"></i>Edit</a>
                  </div>
                </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection
