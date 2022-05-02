@extends('layout.site')

@section('titulo','Contas')

@section('conteudo')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <div class="row">
                    <div class="col-md-6 d-flex">
                    <h6 class="py-3 mb-0">Contas</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a class="btn btn-link text-info px-3 mb-0" href="{{route('admin.accounts.add')}}"><i class="fas fa-circle-plus me-2"></i>Adicionar</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    @foreach ($registers as $register)
                        <li class="row p-4 mb-2 bg-gray-100 border-radius-lg">
                            <div class="col-9 py-2">
                                <span> <span class="">{{$register->id}} | Valor: <span class="text-dark font-weight-bold ms-sm-2">{{$register->value}}</span></span></span>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-link {{($register->category =='1')? 'text-success' : 'text-danger' }} px-3 mb-0"><i class="fa {{($register->category =='1')? 'fa-arrow-trend-up' : 'fa-arrow-trend-down'}} me-2"></i></a>
                                <a class="btn btn-link text-danger px-3 mb-0" href="{{route('admin.accounts.delete',$register->id)}}"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                <a class="btn btn-link text-warning px-3 mb-0" href="{{route('admin.accounts.edit',$register->id)}}"><i class="fas fa-pencil-alt me-2"></i>Edit</a>
                            </div>
                        </li>
                    @endforeach
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                {{$registers->links()}}
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
