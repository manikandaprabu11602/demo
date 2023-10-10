@extends('products.layout')

@section('content')
<div class="row justify-content-center"style="margin-top:100px">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h2 class="mb-0">Product Details</h2>
            </div>

            <div class="card-body" style="margin-left:20%;margin-top:40px;margin-bottom:40px;">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    {{ $product->name }}
                </div>

                <div class="form-group">
                    <strong>Product Details:</strong>
                    {{ $product->detail }}
                </div>
            </div>
            
            <div class="card-footer text-center">
                <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
