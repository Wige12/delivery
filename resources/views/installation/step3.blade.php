@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="card mt-6">
            <div class="card-body">
                <div class="card-header">
                    <div class="mar-ver pad-btm text-center">
                        <h1 class="h3">BANCO DE DADOS</h1>
                        <p>Forneça as informações do seu banco de dados.</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        @if (session()->has('error'))
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <strong>As credenciais do banco de dados são inválidas! </strong>Verifique as credenciais de acesso ao seu banco de dados.
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="text-muted font-13">
                            <form method="POST" action="{{ route('install.db') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="db_host">Host do banco de dados</label>
                                    <input type="text" class="form-control" id="db_host" name="DB_HOST" required
                                           autocomplete="off" placeholder="{{ trans('messages.Ex :') }} localhost">
                                    <input type="hidden" name="types[]" value="DB_HOST">
                                </div>
                                <div class="form-group">
                                    <label for="db_name">Nome do banco de dados</label>
                                    <input type="text" class="form-control" id="db_name" name="DB_DATABASE" required
                                           autocomplete="off" placeholder="{{ trans('messages.Ex :') }} food_database">
                                    <input type="hidden" name="types[]" value="DB_DATABASE">
                                </div>
                                <div class="form-group">
                                    <label for="db_user">Usuário do banco de dados</label>
                                    <input type="text" class="form-control" id="db_user" name="DB_USERNAME" required
                                           autocomplete="off" placeholder="{{ trans('messages.Ex :') }} root">
                                    <input type="hidden" name="types[]" value="DB_USERNAME">
                                </div>
                                <div class="form-group">
                                    <label for="db_pass">Senha do banco de dados</label>
                                    <input type="password" class="form-control" id="db_pass" name="DB_PASSWORD"
                                           autocomplete="off" placeholder="{{ trans('messages.Ex :') }} password">
                                    <input type="hidden" name="types[]" value="DB_PASSWORD">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">Continuar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
