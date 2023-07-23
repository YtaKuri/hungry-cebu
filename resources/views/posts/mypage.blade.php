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
    <header id="header">
        <div class="content">
            <div class="header-container">
                <nav class="serch-restaurant">
                    <form class="d-flex">
                        <input class="form-control" type="search" placeholder="お店の名前を入力" aria-label="お店の名前を入力">
                    </form>
                </nav>
            </div>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
        </div>
    </header>

    <main>
        <div class="main-container">
            <h1 class="mypage-title">ー 予約内容 ー</h1>
            <section class="reservation-content">
                <h2 class="restaurant-name">お店の名前1</h2>
                <div class="reservation-detail">予約日: 2023年07月19日</div>
                <div class="reservation-detail">予約人数: 3人</div>
                <div class="reservation-detail">予約時間: 15:30</div>
            </section>
            <section class="reservation-content">
                <h2 class="restaurant-name">お店の名前2</h2>
                <div class="reservation-detail">予約日: 2023年07月20日</div>
                <div class="reservation-detail">予約人数: 2人</div>
                <div class="reservation-detail">予約時間: 18:00</div>
            </section>
            <section class="reservation-content">
                <h2 class="restaurant-name">お店の名前3</h2>
                <div class="reservation-detail">予約日: 2023年07月21日</div>
                <div class="reservation-detail">予約人数: 4人</div>
                <div class="reservation-detail">予約時間: 12:45</div>
            </section>
        </div>
        <button class="return-top">トップページに戻る</button>
    </main>






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>