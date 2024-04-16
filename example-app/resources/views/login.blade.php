<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inlog.css') }}">
    <title>Document</title>
    <a href="/index">Link naar home</a>
    <a href="/">Link naar Timers</a>
</head>
<body>
    <div class="wrapper">
        <h1>Cat Feeder App</h1>
        <img src="Images/catimage.png" alt="sample profile pic"> 

        <form method="POST" action="/login">
            @csrf
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
