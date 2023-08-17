@extends('layout.master')

@section("title", "Categories")

@section("content")

<!DOCTYPE html>
<html>
<head>
    <title>Category: {{$category->name}}</title>
</head>
<body>
    <h1>Category: {{$category->name}}</h1>

    <h2>Products in this Category:</h2>
    @if ($products->isEmpty())
        <p>No products found in this category.</p>
    @else
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                {{-- <th>Description</th>  --}}
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
                    <a href="/products/{{ $product->id }}"><button class='editButton'>Show</button></a>


                    <a href="{{route('products.edit',$product->id)}}"><button class='editpButton'>Edit</button></a>

                    <form action="products/{{ $product->id }}/delete" method="POST" style="display: inline;">
                        @csrf
                        <button class='deleteButton' type="submit" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>


@endsection
