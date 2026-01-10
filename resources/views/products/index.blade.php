@extends('layouts.app')

@section('title', 'Laravel 12 CRUD | MoiseCode')

@section('content')

    @if ($mesages = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{ $messages }}
        </div>
    @endif

    <!-- Rounded with Label -->
    <a href="{{ route('products.create') }}" type="button"
        class="btn btn-primary btn-label waves-effect waves-light rounded-pill"><i
            class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i>
        Nuevo Producto
    </a>
    <br><br>

    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 grow">Listado de productos</h4>
        </div>

        <div class="card-body">
            <p class="text-muted">Detalle de los productos.</p>
            <div class="live-preview">
                <div class="table-responsive">

                    <table class="table table-borderless table-nowrap">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td scope="row">{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <div class="hstack gap-3 fs-15">
                                        <a href="{{ route('products.show', $product->id) }}" class="link-info"
                                            title="Ver">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="link-primary"
                                            title="Editar">
                                            <i class="ri-settings-4-line"></i>
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon waves-effect waves-light"
                                                title="Eliminar"
                                                onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
