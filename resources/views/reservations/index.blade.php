
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Reservation List</title>
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
       <style>
           #calendar {
               display: grid;
               grid-template-columns: repeat(7, 1fr);
               gap: 1px;
               margin-bottom: 2em;
           }
           .day {
               padding: 1em;
               border: 1px solid #ccc;
               text-align: center;
           }
           .invisible {
               visibility: hidden;
           }
       </style>
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
                   <th>People</th>
                   <th>Action</th>
               </tr>
               </thead>
               <tbody>
               @foreach ($reservations as $reservation)
                   <tr>
                       <td>{{ $reservation->name }}</td>
                       <td>{{ $reservation->date }}</td>
                       <td>{{ $reservation->people }}</td>
                       <td>
                           <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
       <script>
        let date = new Date(2023, 7, 1); // August 2023
            let currentMonth = date.getMonth();
            let currentYear = date.getFullYear();
            let firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();
            let daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

            let calendar = document.getElementById('calendar');
            calendar.innerHTML = '';

           let daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
           for (let i = 0; i < 7; i++) {
               let dayOfWeek = document.createElement('div');
               dayOfWeek.className = 'day';
               dayOfWeek.innerText = daysOfWeek[i];
               calendar.appendChild(dayOfWeek);
           }
   
           // Add empty elements for the days of the week before the first of the month
           for (let i = 0; i < firstDayOfMonth; i++) {
               let emptyDay = document.createElement('div');
               emptyDay.className = 'day invisible';
               calendar.appendChild(emptyDay);
           }

           // Now add the days of the month
           for (let i = 1; i <= daysInMonth; i++) {
               let day = document.createElement('div');
               day.className = 'day';
               day.innerText = i;
               day.addEventListener('click', function() {
                let clickedDate = currentYear + '-' + (currentMonth+1) + '-' + i;

                // Redirect to the reservation page for the clicked date
                window.location.href = `/reservations/${clickedDate}`;
                });
                calendar.appendChild(day);
            //     alert('Fetch and display reservation info for ' + currentYear + '-' + (currentMonth+1) + '-' + i);
            // });
            //    calendar.appendChild(day);
           }
       </script>
   </body>
   </html>
   