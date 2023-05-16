<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Statix Admin</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #354152;
        }


        form{
            height: 625px;
            width: 400px;
            background-color: transparent;
            position: absolute;
            transform: translate(-50%,-50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            /*backdrop-filter: blur(10px);*/
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 125px #000;
            padding: 50px 35px;
        }
        form *{
            font-family: 'Poppins',sans-serif;
            color: #7E8BA3;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        form h3{
            font-size: 24px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label{
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }
        input{
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255,255,255,0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        ::placeholder{
            color: #7E8BA3;
        }
        button{
            margin-top: 50px;
            width: 100%;
            background-color: #74D0A9;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }

        img {
            width: 350px;
            height: 150px;
            text-align: center;
        }


    </style>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form method="POST" action="{{ route('admin_users.login') }}">
    @csrf
    <img src="./dash-logo.png" alt="small company logo">
    <h3>Admin Panel</h3>

    <label for="email">Username</label>
    <input type="text" placeholder="Username" id="email" name="email">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password">

    <button type="submit">Log In</button>

</form>
</body>
</html>
