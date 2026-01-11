@extends('layouts.app')

@section('title', 'Laravel 12 CRUD | MoiseCode')

@section('content')

    @if ($errors->any())
        <!-- Danger Alert -->
        <div class="alert alert-danger alert-dismissible alert-additional fade show" role="alert">
            <div class="alert-body">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <div class="d-flex">
                    <div class="shrink me-3">
                        <i class="ri-error-warning-line fs-16 align-middle"></i>
                    </div>
                    <div class="grow">
                        <h5 class="alert-heading">¡Ups!</h5>
                        <p class="mb-0">Hay algunos problemas con los datos ingresados.</p>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="alert-content">
                <p class="mb-0">Por favor, corrígelos e intenta nuevamente.</p>
            </div>
        </div>
    @endif

    <div class="card">

        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 grow">Nuevo Producto</h4>
        </div>

        <div class="card-body">
            <div class="live-preview">
                <div class="row gy-4">

                    <form action="{{ route('products.store') }}" method="POST">
                        @csrf

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="basiInput" name="name"
                                    placeholder="Ingrese Nombre">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="basiInput" name="price"
                                    placeholder="Ingrese Precio">
                            </div>
                        </div>

                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="basiInput" class="form-label">Descripción</label>
                                <textarea class="form-control" id="basiInput" name="description" placeholder="Ingrese Descripción"></textarea>
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
