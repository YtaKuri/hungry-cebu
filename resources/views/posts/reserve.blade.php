@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>予約画面</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/reserve.css') }}">
</head>
<body>

    @section('content')
    <main>
        <div class="main-container">
            <section class="restaurant">
                <img class="restaurant-image" src="{{ asset('storage/' . str_replace('public/', '', $admin->store_img)) }}">
                <h1 class="restaurant-title">{{ $admin->name }}</h1>
            </section>
        </div>
        <div class="reserve-container">
            <form method="POST" action="{{ route('posts.store') }} " enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="admin_name" value="{{ $admin->name }}">
                <div class="reserve-form">
                    <label for="reservation-date">Reservation Date</label>
                    <input type="date" class="form-control" id="reservation-date" name="date" required>
                </div>
                <div class="reserve-form">
                    <label for="party-size">Party Size</label>
                    <input type="number" class="form-control" id="party-size" placeholder="Enter the number of people" name="people" required>
                </div>
                <div class="reserve-form">
                    <label for="reservation-time">Reservation Time</label>
                    <input type="time" class="form-control" id="reservation-time" name="time" required>
                </div>
                <input type="hidden" name="admin_id" value="{{ $admin->id }}">
                <button type="submit" class="btn btn-primary">Reserve</button>
            </form>
        </div>
    </main>
    @endsection



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>