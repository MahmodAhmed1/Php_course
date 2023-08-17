@extends('layout.master')

@section("title", "edit product")

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
        <h1> Edit product </h1>
        <form method="POST" action="{{route('products.update', $product->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
                <label  class="form-label">Name</label>
                <input type="text" name='name'class="form-control" value="{{$product->name}}" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Price</label>
                <input type="text"  name='price' value="{{$product->price}}" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Description</label>
                <input type="text" name="description" value="{{$product->description}}" class="form-control" >
            </div>
            <div class="mb-3">
                <label  class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" value="{{$product->image}}"" >
            </div><br>
            <button type="submit" class="submitButton">Submit</button>
        </form>

    </div>
    </body>
</html>
@endsection
