@extends('layouts.master')

@section('title', 'Produtos')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-default">New Product</a>

    <br><br>
    <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
                <th></th>
            </tr>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td><a href="{{ route('products.edit', ['id' => $product->id ]) }}"> Edit </a></td>
                    <td><a href="{{ route('products.destroy', ['id' => $product->id ]) }}"> Remove </a></td>
                </tr>
            @endforeach

        </table>
@endsection
