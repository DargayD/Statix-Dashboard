<!DOCTYPE html>
<html lang=”en”>
<head>
    <link rel=”stylesheet” href=”https://use.fontawesome.com/releases/v5.8.1/css/all.css”>
    <link rel="stylesheet" type="text/css" href="/admin.css">
    <meta charset=”UTF-8″>
    <meta http-equiv=”X-UA-Compatible” content=”IE=edge”>
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
    <title>Document</title>
    <style>
    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <div class="profile">
            <img src="./dash-logo-sm.png" alt=”profile_picture”>
            <h3>Admin</h3>
        </div>
        <ul>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>My Dashboard</p>
                </a>
            </li>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>People</p>
                </a>
            </li>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>Perfomance</p>
                </a>
            </li>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>Development</p>
                </a>
            </li>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>Reports</p>
                </a>
            </li>
            <li>
                <a href=”/dashboard”>
                    <p class=”item”>Settings</p>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="content">
            <div class="card card-bg-custom order-card">
                <div class="card-block">
                    <h2 class="card-title">Booked By</h2>
                    <div class="book-data">
                        <div class="book-data-col1">
                            <h4 class="card-text" style="text-decoration: underline">Full Name</h4>
                            @foreach ($users as $user)
                                <p>{{ $user->name }}</p>
                            @endforeach
                        </div>
                        <div class="book-data-col2">
                            <h4 class="card-text" style="text-decoration: underline">Seat Selection</h4>
                            @foreach ($users as $user)
                                <p>{{ $user->seatName }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bg-custom order-card">
                <div class="card-block">
                    <h2 class="card-title">Total Bookings</h2>
                    <h4 class="card-text" style="text-decoration: underline"></h4>
                        <p class="total-lg">{{ $totalBookings }}</p>
                </div>
            </div>
            <div class="card card-bg-custom order-card">
                <div class="card-block">
                    <h2 class="card-title">Total Earnings</h2>
                    <h4 class="card-text" style="text-decoration: underline"></h4>
                        <p class="total-lg">${{ $totalEarnings }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
</script>
</body>
</html>

