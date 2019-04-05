@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="card" style="width: 50rem; height: 30rem;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <p class="h4 text-center py-4">Ingresar</p>

                <div class="container">
                    <div class="md-form">

                        <div class="col-md-12">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>
                            <div class="col-md-2"><i class="fa fa-user prefix grey-text"></i>
                            </div>

                            <div class="md-form col-md-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email" class="font-weight-light">Correo Electronico</label>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>

                        <div class="col-md-12">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                            <div class="col-md-2"><i class="fa fa-lock prefix grey-text"></i></div>
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
                    </div>
                    <br>
                    <div class="text-center py-4 mt-3">

                        <button type="submit" class="btn btn-cyan">
                            {{ __('Ingresar') }}
                        </button>


                    </div>
                </div>
            </form>
        </div>



    </div>
</div>






@endsection 