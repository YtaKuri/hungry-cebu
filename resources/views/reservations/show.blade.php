
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4">Reservation Details</h1>
        <div class="card">
            <div class="card-header">
                Reservation Information
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> {{ $reservation->name }}</li>
                <li class="list-group-item"><strong>Reservation Date:</strong> {{ $reservation->reservation_date }}</li>
                <li class="list-group-item"><strong>Number of People:</strong> {{ $reservation->number_of_people }}</li>
            </ul>
        </div>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4">Reservation Details</h1>
        <div class="card">
            <div class="card-header">
                Reservation Information
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Name:</strong> {{ $reservation->name }}</li>
                <li class="list-group-item"><strong>Date:</strong> {{ $reservation->date }}</li>
                <li class="list-group-item"><strong>People:</strong> {{ $reservation->people }}</li>
            </ul>
        </div>
        <a href="{{ route('reservations.index') }}" class="btn btn-primary mt-4">Back to List</a>
        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="mt-4">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Reservation</button>
        </form>
    </div>
</body>
</html>
