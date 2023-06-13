@extends('layouts.app-admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Advertencia</div>

                <div class="card-body">
                    @if (Session('status'))
                        <div class="alert alert-danger">
                            {{ Session('status') }}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>

@vite(['resources/js/productos/show.js'])

@endsection