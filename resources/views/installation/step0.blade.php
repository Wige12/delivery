@extends('layouts.blank')

@section('content')
    <div class="container">
        <div class="card mt-6">
            <div class="card-body">
                <div class="card-header d-block">
                    <div class="text-center">
                        <h1 class="h3">INSTALAÇÃO | STACKFOOD 7.0 | SANDER CODE </h1>
                        <p>Informe os dados solicitados.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <ol class="list-group">
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Nome do banco de dados</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Usuário do banco de dados</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Senha do banco de dados</li>
                            <li class="list-group-item text-semibold"><i class="fa fa-check"></i> Host do banco de dados</li>
                        </ol>
                        <p class="pt-5 font-sm">
                            Vamos verificar as permissões do banco de dados para efetuar a instalação automática!
                        </p>
                        <br>
                        <div class="text-center">
                            <a href="{{ route('step1') }}" class="btn btn-info text-light">
                                Vamos lá! <i class="fa fa-forward"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
