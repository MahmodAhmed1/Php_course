@extends('layouts.app')

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
    <div class="container">
        <h2>All Products</h2>
        <a href="{{route('products.create')}}" class ="addButton">Add new product</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
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
                <td>
                @foreach ($categories as $category)
                    @if ($product->category_id == $category->id)
                        {{$category->name}}
                    @endif
                @endforeach

                </td>
                {{-- <td>{{ $product->description }}</td> --}}
                <td><img src="{{asset($product->image)}}" alt="Product Image" height="100"></td>
                <td>
                    <a href="products/{{ $product->id }}"><button class='editButton'>Show</button></a>


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

</body>
</html>

@endsection
