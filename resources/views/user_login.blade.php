<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザーログイン</title>
    <!-- BootstrapのCSSを読み込む -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- 追加のCSSスタイル -->
    <style>
        body {
            background-color: #f8f9fa; /* 背景色を灰色に */
        }

        .card {
            background-color: #fff; /* カードの背景色を白に */
            border-radius: 10px; /* カードの角を丸く */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* カードに影をつける */
        }

        .form-control {
            border: 1px solid #ced4da; /* 入力フィールドに薄い枠線を付ける */
        }

        .btn-primary {
            background-color: #dc3545; /* ボタンの背景色を赤に */
            border-color: #dc3545; /* ボタンの枠線色を赤に */
        }

        .btn-primary:hover {
            background-color: #c82333; /* ボタンにマウスオーバーしたときの背景色を変更 */
            border-color: #bd2130; /* ボタンの枠線色を変更 */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Login</h1>
                        <form method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email：</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password：</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
