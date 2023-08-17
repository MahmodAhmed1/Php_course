@extends('layout.master')

@section("title", "Categories")

@section("content")

<!DOCTYPE html>
<html>
<head>
    <title>Amazon Categories</title>
    <style>
        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .category-item {
            width: 80%;
            height: 400px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
            color: #29ad22;
            font-size: 40px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .category-item:hover {
            background-color: #f5f5f5;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <h1 style="text-align: center">Amazon Categories</h1>
    <ul class="category-list">
        @foreach ($categories as $category)
        <li class="category-item" style="background-image: url('{{asset($category->image)}}')">
            <a href="{{route('categories/showProducts', ['category' => $category->id])}}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</body>
</html>

@endsection
