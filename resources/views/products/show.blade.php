@extends('layouts.app')

@section('title', 'Laravel 12 CRUD | MoiseCode')

@section('content')

    <div class="card">

        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 grow">Producto detalle</h4>
        </div>

        <div class="card-body">
            <div class="live-preview">
                <div class="row gy-4">


                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="basiInput" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="basiInput" value="{{ $product->name }}" readonly>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="basiInput" class="form-label">Precio</label>
                            <input type="text" class="form-control" id="basiInput" value="{{ $product->price }}"
                                readonly>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="basiInput" class="form-label">Descripción</label>
                            <textarea class="form-control" id="basiInput" readonly>{{ $product->description }}</textarea>
                        </div>
                    </div>

                    <div class="col-xxl-3 col-md-6">
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-label waves-effect waves-light rounded-pill mt-4"><i
                                class="ri-save-line label-icon align-middle rounded-pill fs-16 me-2"></i>
                            Atras
                        </a>
                    </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
