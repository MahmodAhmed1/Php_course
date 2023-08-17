@extends('layout.master')

@section("title", "products")

@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
    <div><h1>Products</h1></div>
    <table>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Price</th>
                {{-- <th>Description</th> --}}
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                {{-- <td>{{ $product->description }}</td> --}}
                <td><img src="{{asset($product->image)}}" alt="Product Image" height="100"></td>
                <td>
                    <a href="/php-course/iti/laravel/day2/public/products/{{ $product->id }}"><button class='editButton'>Show</button></a>
                    <form action="/php-course/iti/laravel/day2/public/products/{{ $product->id }}/delete" method="POST" style="display: inline;">
                        @csrf
                        <button class='deleteButton' type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

@endsection
