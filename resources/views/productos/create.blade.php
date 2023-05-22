@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de productos') }}</div>

                <div class="card-body">

                    <form class="m-3" action="{{ route('productos.store') }}" method="POST">          
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label"> Nombre </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label"> Precio </label>
                            <input type="number" class="form-control" id="precio" name="precio" placeholder="Ingrese el precio del producto">
                        </div>
                        <div class="mb-3">
                            <label for="categoria_id" class="form-label"> Categoría </label>
                            <select class="form-control" name="categoria_id" id="categoria_id">
                                <option value=""> Seleccione la categoría </option>
                                @foreach ($categorias as $cat)
                                    <option value="{{ $cat->id }}"> {{ $cat->nombre }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label"> Descripción </label>
                            <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Ingrese la descripción del producto"></textarea>                           
                        </div>
                        <button type="submit" class="btn btn-success"> Crear </button>
                        <a class="btn btn-danger" href="{{ route('productos.index') }}"> Cancelar </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection