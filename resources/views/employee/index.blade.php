@extends('layouts.head')
@section('content')
    <div class="container">
        <div class="row">
            <a href="{{ route('empleados.create') }}"><button type="button" class="btn btn-primary col-auto">Agregar Nuevo Empleado</button></a>
        </div>
        <div class="row mt-3">
            <table class="table border bg-white">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Domicilio</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <th>{{ $employee->id }}</th>
                            <th>{{ $employee->name }}</th>
                            <th>{{ $employee->email }}</th>
                            <th>{{ $employee->address }}</th>
                            <th>{{ $employee->birth }}</th>
                            <th>{{ $employee->number_phone }}</th>
                            <th>
                                <div class="row justify-content-center">
                                    <a href="{{ route('empleados.show', $employee) }}" class="col-auto"><img src="img/show.svg" height="30"></a>
                                    <a href="{{ route('empleados.edit', $employee->id) }}" class="col-auto"><img src="img/edit.svg" height="30"></a>
                                    <form action="{{ route('empleados.destroy', $employee->id) }}" class="col-auto" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <a href="" onclick="event.preventDefault(); this.closest('form').submit();"><img src="img/delete.svg" height="30">
                                    </form>
                                    </a>
                                </div>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
