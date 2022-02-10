@extends('layout')

@section('title', 'Post')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4"
                method="POST"
                action="/posts_create"
            >
                @csrf
                <h1 class="display-4">@lang('Posts')</h1>
                <hr>
                <div class="form-group">
                    <label for="titulo">Titulo</label>
                    <input class="form-control bg-light shadow-sm @error('titulo') is-invalid @else border-0 @enderror"
                        id="titulo"
                        name="titulo"
                        placeholder="Escribe aquí tu titulo..."
                        value="{{ old('titulo') }}"
                        require
                    >
                    @error('titulo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="extracto">extracto</label>
                    <input class="form-control bg-light shadow-sm @error('extracto') is-invalid @else border-0 @enderror"
                        id="extracto"
                        name="extracto"
                        placeholder="Escribe aquí tu extracto..."
                        value="{{ old('extracto') }}"
                    >
                    @error('extracto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido</label>
                    <input class="form-control bg-light shadow-sm @error('contenido') is-invalid @else border-0 @enderror"
                        id="contenido"
                        name="contenido"
                        placeholder="Escribe aquí tu contendio..."
                        value="{{ old('contenido') }}"
                        require
                    >
                    @error('contenido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="comentable">Comentable</label>
                    <input class="form-control bg-light shadow-sm @error('comentable') is-invalid @else border-0 @enderror"
                        type="checkbox"
                        name="comentable"
                        value="{{ old('comentable') }}"
                        require>
                    @error('comentable')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="caducable">Caducable</label>
                    <input class="form-control bg-light shadow-sm @error('caducable') is-invalid @else border-0 @enderror"
                        type='checkbox'
                        id="caducable"
                        name="caducable"
                        value="{{ old('caducable') }}"
                        require>
                    @error('caducable')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="acceso">Acceso</label>
                    <select class="form-control bg-light shadow-sm @error('acceso') is-invalid @else border-0 @enderror"
                        id="acceso"
                        name="acceso"
                        require>{{ old('acceso') }}
                        <option value="privado">privado</option>
                        <option value="publico">público</option>
                    </select>
                    @error('acceso')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn btn-primary btn-lg btn-block">@lang('Enviar')</button>
            </form>
        </div>
    </div>
</div>
@endsection