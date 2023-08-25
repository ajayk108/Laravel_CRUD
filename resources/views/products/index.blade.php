@extends('layouts.app')

@section('main')
<div class="container">
    <div class="text-right">
        <a href="products/create" class="btn btn-dark mt-2">New Product</a>
    </div>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">Sr.no</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
                    <td><img src="products/{{ $product->image }}" alt="" class="rounded" width="50px"
                            height="50px"></td>
                    <td>
                        <a href="products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <a href="products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}

</div>

@endsection
