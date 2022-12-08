@extends('layouts.head')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 bg-white border shadow p-2 rounded">
                <div class="text-center">
                    <h1 class="fw-bold">Registrar Empleado</h1>
                </div>
                <form action="{{ route('empleados.store') }}" method="POST">
                    @csrf
                    <div class="d-grid gap-3">
                        <div class="">
                            <label for="id" class="form-label fw-bold">Identificador</label>
                            <input type="text" class="form-control @error('id')is-invalid @enderror" name="id" id="id" value="{{ old('id') }}" >
                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="name" class="form-label fw-bold">Nombre Completo</label>
                            <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="email" class="form-label fw-bold">Correo</label>
                            <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="address" class="form-label fw-bold">Domicilio</label>
                            <input type="text" class="form-control @error('address')is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" >
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="birth" class="form-label fw-bold">Fecha de Nacimiento</label>
                            <input type="date" class="form-control @error('birth')is-invalid @enderror" id="birth" name="birth" value="{{ old('birth') }}" >
                            @error('birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="number_phone" class="form-label fw-bold">Telefono</label>
                            <input type="text" class="form-control @error('number_phone')is-invalid @enderror" id="number_phone" name="number_phone" value="{{ old('number_phone') }}" >
                            @error('number_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary col-2 mx-auto">Agregar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
