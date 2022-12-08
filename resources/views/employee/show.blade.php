@extends('layouts.head')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 bg-white border shadow p-2 rounded">
                <div class="text-center">
                    <h1 class="fw-bold">Información Empleado {{ $employee->id }}</h1>
                </div>
                <div class="d-grid gap-3 m-2">
                    <div class="row">
                        <div class="col-auto">
                            <label for="id" class="form-label fw-bold">Identificador</label>
                            <input type="text" class="form-control" name="id" id="id" value="{{ $employee->id }}" readonly>
                        </div>
                        <div class="col">
                            <label for="name" class="form-label fw-bold">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <label for="email" class="form-label fw-bold">Correo</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $employee->email }}" readonly>
                        </div>
                        <div class="col">
                            <label for="address" class="form-label fw-bold">Domicilio</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <label for="birth" class="form-label fw-bold">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="birth" name="birth" value="{{ $employee->birth }}" readonly>
                        </div>
                        <div class="col">
                            <label for="number_phone" class="form-label fw-bold">Telefono</label>
                            <input type="text" class="form-control" id="number_phone" name="number_phone" value="{{ $employee->number_phone }}" >
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{ route('empleados.index') }}" class="col-auto mx-auto"><button type="button" class="btn btn-secondary">Volver</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
