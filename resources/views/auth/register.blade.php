@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="card" style="width: 50rem; height: 37rem;">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <p class="h4 text-center py-4">Ingresar</p>

                <div class="container">
                    <div class="md-form">

                        <div class="col-md-12">
                            <div class="col-md-2"><i class="fa fa-user prefix grey-text"></i>
                            </div>

                            <div class="md-form col-md-10">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="name" class="font-weight-light">Nombre</label>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="col-md-2"><i class="fa fa-envelope prefix grey-text"></i>
                            </div>
                            <div class="md-form col-md-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="email" class="font-weight-light">Correo Electronico</label>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-2"><i class="fa fa-lock prefix grey-text"></i>
                            </div>
                            <div class="md-form col-md-10">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="password" class="font-weight-light">Contraseña</label>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-2"><i class="fa fa-exclamation-triangle prefix grey-text"></i>
                            </div>
                            <div class="md-form col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                <label for="password-confirm" class="font-weight-light">Confirma Contraseña</label>
                            </div>
                        </div>



                        <div class="text-center py-4 mt-3">

                            <button type="submit" class="btn btn-cyan">
                                {{ __('Registrarse') }}
                            </button>

                        </div>



                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection 