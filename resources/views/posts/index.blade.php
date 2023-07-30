@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>一覧画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @section('content')
    @foreach ($admins as $admin)
    <a href="{{ route('posts.reserve', [$admin->id]) }}">
    <main>
        <div class="main-container">
            <section class="restaurant">
                <h1 class="restaurant-title">{{ $admin->name }}</h1>
                {{-- 間違いの記述 --}}
                {{-- <img class="restaurant-image" src="{{ asset('storage/images/' . $admin->store_img) }}"> --}}
                {{-- 正しい記述 --}}
                <img class="restaurant-image" src="{{ asset('storage/' . str_replace('public/', '', $admin->store_img)) }}">
                {{-- パスの確認 --}}
                {{-- {{ $admin->store_img }} --}}
            </section>
        </div>
    </main>
    </a>
    @endforeach
    @endsection




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>