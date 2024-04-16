<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inlog.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Cat Feeder App</h1>
        <img src="Images/catimage.png" alt="sample profile pic"> 

        <form method="POST" action="/register">
            @csrf
            <input type="text" name="username" placeholder="Enter Username">
            @error('username')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="Enter Password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
            <button type="submit">Register</button>
            <a href="/login">Al een account?</a>
        </form>
    </div>
</body>
</html>