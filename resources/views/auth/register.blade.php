@extends('layouts.app')

@section('title', '| Registrate')
@section('content')
<div class="container">


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header  bg-secondary text-white text-center">{{ __('Registro') }}</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                <label for="name">Nombre</label>
                                    <input id="name "type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="apellidoP">Apellido Paterno</label>
                                   <input id="apellidoP" type="text" class="form-control @error('apellidoP') is-invalid @enderror" name="apellidoP" value="{{ old('apellidoP') }}" required autocomplete="apellidoP" autofocus placeholder="Apellido Paterno">
                                   @error('apellidoP')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                   @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="apellidoM">Apellido Materno</label>
                                   <input id="apellidoM" type="text" class="form-control @error('apellidoM') is-invalid @enderror" name="apellidoM" value="{{ old('apellidoM') }}" required autocomplete="apellidoM" autofocus placeholder="Apellido Materno">
                                   @error('apellidoM')
                                       <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-row ">
                            <div class="form-group col-sm-8 ">
                                <label for="email">Correo Electronico</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="tu.correo.electronico@dominio.com">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group col-sm-4 ">
                                <label for="fnacimiento">Fecha de Nacimiento</label>
                                    <input id="fnacimiento"type="date" class="form-control @error('fnacimiento') is-invalid @enderror" name="fnacimiento" value="{{ old('fnacimiento') }}" required autocomplete="fnacimiento">
                                    @error('fnacimiento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>

                        <div class="form-row ">
                            <div class="form-group col-sm-8 ">
                                <label for="user">Usuario</label>
                                    <input id="user" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus placeholder="tu.nombre.de.usuario">
                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            <div class="form-group col-md-4">
                                <label for="tipo_usuario">Tipo de Usuario</label>
                                    <select id="tipo_usuario" type="text" class="form-control @error('tipo_usuario') is-invalid @enderror" name="tipo_usuario" value="{{ old('tipo_usuario') }}" required autocomplete="tipo_usuario" >
                                            @error('tipo_usuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        <option>Lector</option>
                                        <option>Escritor</option>
                                        <option>Administrador</option>
                                    </select>
                            </div>
                        </div>


                        <div class="form-row ">
                            <div class="form-group col-sm-4 ">
                                <label for="password">Contraseña</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  autofocus aria-describedby="passwordHelpInLine">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <small id="password" class="form-text text-muted">
                                    Tu Contraseña debera tener al menos 8 caracteres alfanumericos
                                </small>
                            </div>

                            <div class="form-group col-sm-4 ">
                                <label for="password-confirm">Confirma Contraseña</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" autofocus aria-describedby="passwordHelpInLine">
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="avatar">Foto de Perfil</label>
                                    <input id="avatar" type="file" class="form-control-file btn" name="avatar" value="{{ old('avatar') }}">




                        </div>
                        <button type="submit" class="btn btn-dark">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
