@extends('layouts.app')

@section("title", "create product")

@section("content")


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
    <title>Document</title>
</head>
<body>
    <br>
    <br><br>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="name" class="form-label">Category Name:</label>
            <input type="text" name='name'class="form-control" id="name" value="{{ old('name') }}" required><br><br>
            @error('name')
            <span style="color: red; font-weight: bold;">
                {{ $message }}
            </span>
            @enderror
        </div>
        <div>
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" required>
        </div><br><br>
        <!-- Add more form fields if needed -->
        <div>
            <button type="submit" class="editpButton" style="background-color: #333">Add Category</button>
        </div>
    </form>
</body>
</html>

@endsection
