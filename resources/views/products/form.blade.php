@extends('products.layout')

@section('content')
<div class="row justify-content-center" style="margin-top:100px;">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                
                @if(isset($product))
                    <h2 class="mb-0 text-center">Edit Product</h2>
                @else       
                    <h2 class="mb-0 text-center">Add New Product</h2>
                @endif
            </div>

            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($product))
                    {{ Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) }}
                @else
                    {{ Form::open(['route' => 'products.store']) }}
                @endif
                @csrf

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}
                </div>

                <div class="form-group">
                    {{ Form::label('detail', 'Detail') }}
                    {{ Form::textarea('detail', null, ['class' => 'form-control', 'style' => 'height:150px', 'placeholder' => 'Detail']) }}
                </div>

                <div class="text-center">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                </div>
                {{ Form::close() }}
            </div>
            
            <div class="card-footer text-center">
                <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
