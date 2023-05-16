<!DOCTYPE html>
<html>

<head>
    <title>Vision Air</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/main.css">
</head>

<body>
<nav class="zone purple">
    <ul class="main-nav">
        <li><a href="{{ route('welcome') }}"><img src="./logo-sm.png" alt="small company logo"></a></li>
        <li><a href="{{ route('book') }}">Book A Flight</a></li>
        <li><a href="{{ route('about') }}">Our Team</a></li>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
        <li class="push"><a href="">Contact</a></li>
    </ul>
</nav>
<div class="main-container banner"><img src="./logo.png" alt="logo"></div>
<div class="body-background">

{{$slot}}

</div>
<footer class="zone purple">
    <div class="footer-content">
        <p>Vision Air</p>
        <p>Copyright - 2023</p>
    </div>
</footer>
</div>
</body>

</html>
