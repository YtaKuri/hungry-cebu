@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>マイページ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
</head>
<body>

    @section('content')
    <main>
        <span class="main-container">
            <h1 class="mypage-title">ー Reservation details ー </h1>
            @foreach ($reservations as $reservation)
            <section class="reservation-content">
                <h2 class="restaurant-name">{{ $reservation->name }}</h2>
                <span class="reserve-detail">Reservation date: {{ $reservation->date }}</span><br>
                <span class="reserve-detail">persons: {{ $reservation->people }}</span><br>
                <span class="reserve-detail">Reservation time: {{ $reservation->time }}</span>
                <span class="deletedit">
                    <form action="{{ route('posts.destroy',$reservation->id) }}"method="post">
                        @csrf
                        @method('delete')
                        <input type='submit' value="delete" class="btn btn-danger" onclick='return confirm("Really delete?");'>
                    </form>
                </span>
            </section>
            @endforeach
            <button class="return-top"><a class="color-topbtn" href="{{ route('home') }}">Top page</a></button>
        </span>
    </main>
    @endsection





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>