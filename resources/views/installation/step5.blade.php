@extends('layouts.blank')
@section('content')
    <div class="container">
        <div class="card mt-6">
            <div class="card-body">
                <div class="card-header">
                    <div class="mar-ver pad-btm text-center w-100">
                        <h1 class="h3">CONTA ADMINISTRADOR<i class="fa fa-cogs"></i></h1>
                        <p>Forneça suas informações.</p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <div class="text-muted font-13">
                            <form method="POST" action="{{ route('system_settings') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="system_name">Nome do negócio</label>
                                            <input type="text" class="form-control" name="business_name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="admin_name">Nome</label>
                                            <input type="text" class="form-control" name="f_name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="admin_name">Sobrenome</label>
                                            <input type="text" class="form-control" name="l_name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="admin_email">E-mail</label>
                                            <input type="email" class="form-control" id="admin_email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="admin_phone">Telefone</label>
                                            <input type="text" class="form-control" name="phone" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="admin_password">Senha do administrador (deve conter pelo menos 8 caracteres)</label>
                                            <input type="text" class="form-control" id="admin_password" name="password"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-info">Continuar</button>
                                        </div>
                                    </div>
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
