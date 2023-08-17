@extends('layouts.app')

@section("title", "create product")

@section("content")


<!-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <style>
            form{
                width: 80%;
                margin: auto;
            }
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add</title>
    </head>
    <body>
    <div class="container">

    <h1> Add new product </h1>
    <form method="POST" action="{{route('products.store')}}">
        @csrf
        <div>
            <label  class="form-label">Name</label>
            <input type="text" name='name'class="form-control" value="{{ old('name') }}" required><br><br>
            @error('name')
            <span style="color: red; font-weight: bold;">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label  class="form-label">Price</label>
            <input type="text"  name='price' class="form-control" value="{{old('price')}}" required><br><br>
            @error('email')
            <span style="color: red; font-weight: bold;">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label  class="form-label">Description</label>
            <input type="text" name="description" class="form-control" required><br><br>
        </div>

        <div>
            <label for="Category" class="form-label">Category</label>
            <select class="form-control" id="Category" name="category_id" style="padding: 15px">
                <option value="1">Electronics</option>
                <option value="2">Clothing, Shoes & Jewelry</option>
                <option value="3">Toys & Games</option>
                <option value="4">Grocery & Gourmet Food</option>
            </select>
            @error('category_id')
            <span style="color: red; font-weight: bold;">
                {{ $message }}
            </span>
            @enderror<br><br>
        </div>
        <div>
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div><br>

        <button type="submit" class="editpButton" style="background-color: #333">Create</button>
     </form>

     </div>
     </body>
     </html>


@endsection
