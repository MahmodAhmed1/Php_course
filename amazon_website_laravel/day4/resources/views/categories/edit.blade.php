@extends('layouts.app')

@section("title", "Edit Category")

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
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <br><br><br>

        <div>
            <label for="name">Category Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" required>
        </div><br>
        <!-- Add more form fields if needed -->
        <div>
            <button type="submit" class="editpButton" style="background-color: #333">Update Category</button>
        </div>
    </form>
</body>
</html>
@endsection
