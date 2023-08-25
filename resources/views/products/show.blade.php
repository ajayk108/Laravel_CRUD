@extends('layouts.app')

@section('main')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 mt-4">
            <div class="card p-4">
                <p>Name: <strong>{{ $product->name }}</strong></p>
                <p>Description: <strong>{{ $product->description }}</strong></p>
                <img src="/products/{{ $product->image }}" alt="" class="rounded" width="100%">
            </div>
        </div>
    </div>


</div>

@endsection
