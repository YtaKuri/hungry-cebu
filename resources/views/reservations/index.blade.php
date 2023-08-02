{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation List</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div id="calendar"></div>
    </div>
    <div class="container py-4">
        <h1 class="mb-4">Reservation List</h1>
        <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-4">Add Reservation</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>People</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->people }}</td>
                        <td>
                            <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- カスタムcss --}}
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="application-title">Hungry-Cebu</div>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    @if(Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>

        <div class="container">
            <div id="calendar"></div>
        </div>
        <div class="container py-4">
            <h1 class="mb-4">Reservation List</h1>
            <a href="{{ route('reservations.create') }}" class="btn btn-primary mb-4">Add Reservation</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>People</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->user->name }}</td>
                            <td>{{ $reservation->date }}</td>
                            <td>{{ $reservation->time }}</td>
                            <td>{{ $reservation->people }}</td>
                            <td>
                                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
