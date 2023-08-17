@extends('layout.master')

@section("title", "products")

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>
<div class="container">

<h1> Add new product </h1>
<form method="POST" action="{{route('products.store')}}?track=php">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input type="text" name='name'class="form-control" value="{{ old('name') }}" ><br><br>
        @error('name')
        <span style="color: red; font-weight: bold;">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="text"  name='price' class="form-control" value="{{old('price')}}" ><br><br>
        @error('email')
        <span style="color: red; font-weight: bold;">
            {{ $message }}
        </span>
        @enderror
    </div>
    <div class="mb-3">
        <label  class="form-label">Description</label>
        <input type="text" name="description" class="form-control" ><br><br>
    </div>
    <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
</div><br>
    <button type="submit" class="submitButton">Submit</button>
 </form>

 </div>
 </body>
 </html>
@endsection