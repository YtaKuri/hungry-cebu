<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .registration-container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-right: 10px;
            margin-bottom: 20px;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .registration-container label {
            font-weight: bold;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        body {
            background-image: url('{{ asset('image/food-g8aabc964e_640.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    </style>
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-4">hungry cebu</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="registration-container">
                    <h2>ユーザー新規登録</h2>
                    <form method="POST" action="{{ route('user.registration') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name">ユーザー名：</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email">メールアドレス：</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password">パスワード：</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="btn-container">
                            <button type="submit" class="btn btn-primary">新規登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
