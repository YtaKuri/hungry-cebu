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
        <div class="main-container">
            <h1 class="mypage-title">ー 予約内容 ー</h1>
                @foreach ($reservations as $reservation)
                <section class="reservation-content">
                    <h2 class="restaurant-name">レストランの名前</h2>
                    <div class="reserve-detail">予約日: {{ $reservation->date }}</div>
                    <div class="reserve-detail">予約人数: {{ $reservation->people }}</div>
                    <div class="reserve-detail">予約時間: {{ $reservation->time }}</div>
                    <div class="deletedit">
                        <form action="{{ route('posts.destroy',$reservation->id) }}"method="post">
                            @csrf
                            @method('delete')
                            <input type='submit' value="削除" class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                        <a href="{{ route('posts.edit', $reservation->id) }}" class="btn btn-primary">編集</a>
                    </div>
                </section>
                @endforeach
        <button class="return-top"><a class="color-topbtn" href="{{ route('home') }}">トップページに戻る</a></button>
    </main>
    @endsection





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>