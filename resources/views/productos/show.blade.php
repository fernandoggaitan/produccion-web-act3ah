@extends('layouts.app-admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $producto->nombre }}</div>

                <div class="card-body">
                    <img style="max-width: 100px;" src="{{ asset('/storage/' . $producto->imagen) }}" alt="{{ $producto->nombre }}" />
                    <div class="border-bottom mb-2">
                        {{ $producto->descripcion }}
                    </div>
                    <a href="{{ route('productos.index') }}" class="btn btn-primary"> Volver a productos </a>
                    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-success"> Editar producto </a>
                    <form id="form_delete" class="d-inline" action="{{ route('productos.destroy', $producto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="submit_delete" type="submit" class="btn btn-danger"> Eliminar producto </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@vite(['resources/js/productos/show.js'])

@endsection