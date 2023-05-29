@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->nombre }}</div>

                <div class="card-body">
                    <div class="border-bottom mb-2">
                        {{ $producto->descripcion }}
                    </div>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary"> Volver a productos </a>
                    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-success"> Editar producto </a>
                    <form class="d-inline" action="{{ route('productos.destroy', $producto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Eliminar producto </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection