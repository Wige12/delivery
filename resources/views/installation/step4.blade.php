@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="card mt-6">
            <div class="card-body">
                <div class="card-header d-block">
                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{session('error')}}
                        </div>
                    @endif
                    <div class="mar-ver pad-btm text-center">
                        <h1 class="h3">IMPORTAR BANCO DE DADOS | INSTALAÇÃO AUTOMÁTICA</h1>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3"></div>
                    <div class="col-md-12">

                        <p class="text-muted font-13 text-center">
                            <strong>O banco de dados está conectado<i class="fa fa-check"></i></strong>. Proceed
                            <strong>Clique para instalar</strong>.
                            Este processo automatizado irá configurar seu banco de dados.
                        </p>
                        @if(session()->has('error'))
                            <div class="text-center mar-top pad-top">
                                <a href="{{ route('force-import-sql') }}" class="btn btn-danger" onclick="showLoder()">Forçar importação do Banco de Dados</a>
                            </div>
                        @else
                            <div class="text-center mar-top pad-top">
                                <a href="{{ route('import_sql') }}" class="btn btn-info" onclick="showLoder()">Importar Banco de Dados</a>
                            </div>
                        @endif

                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function showLoder() {
            $('#loading').fadeIn();
        }
    </script>
@endsection
