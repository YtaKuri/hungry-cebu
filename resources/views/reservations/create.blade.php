<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4">Add Reservation</h1>
        <form action="{{ route('reservations.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" id="number" name="number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="reservation_date">Date:</label>
                <input type="date" id="date" name="date" class="form-control" min="{{ date('Y-m-d') }}" required>
            </div>
            <div class="form-group">
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="number_of_people">People:</label>
                <input type="number" id="people" name="people" class="form-control" min='1' required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary mt-3">Back to Reservation List</a>
    </div>

    <script>
        // 今日の日付を取得
        const today = new Date().toISOString().split('T')[0];
        // フォームの日付入力欄に最小値を設定
        document.getElementById('date').setAttribute('min', today);
    </script>

</body>
</html>
