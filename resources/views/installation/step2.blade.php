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
                        <h1 class="h3">CÓDIGO DE COMPRA | SANDER CODE</h1>
                        <p>
                            Forneça seu código de compra do site.<br>
                            <a href="https://sandercode.store"
                                class="text-info">Código de compra da SanderCode.store ativado com sucesso!</a>
                        </p>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <div class="text-muted font-13">
                            <form method="POST" action="{{ route('purchase.code') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="purchase_code">Nome de usuário</label>
                                    <input type="text" value="SANDERCODE-1318" class="form-control"
                                           id="username"
                                           name="username" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="purchase_code">Código de compra</label>
                                    <input type="text" value="SC-46289450" class="form-control"
                                           id="purchase_key"
                                           name="purchase_key" readonly>
                                </div>
                                <div class="text-center">
                                    <a href="step3" class="btn btn-info">Continuar</a>
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
