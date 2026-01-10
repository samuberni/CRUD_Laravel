@extends('layouts.app')

@section('title', 'Laravel 12 CRUD | MoiseCode')

@section('content')

    @if ($errors->any())
        <div>
            <strong>¡Ups! Hay algunos problemas con los datos ingresados.</strong><br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">

        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 grow">Editar Producto</h4>
        </div>

        <div class="card-body">
            <div class="live-preview">
                <div class="row gy-4">

                    <form action="{{ route('products.update', $product->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="basiInput" name="name"
                                    value="{{ $product->name }}" placeholder="Ingrese Nombre">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="basiInput" name="price"
                                    value="{{ $product->price }}" placeholder="Ingrese Precio">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Descripción</label>
                                <textarea class="form-control" id="basiInput" name="description" placeholder="Ingrese Descripción">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <button type="submit"
                                class="btn btn-primary btn-label waves-effect waves-light rounded-pill mt-4"><i
                                    class="ri-save-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                                Guardar
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
