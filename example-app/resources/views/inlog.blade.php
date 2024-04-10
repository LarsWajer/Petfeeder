<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/inlog.css') }}">
    <title>Document</title>
    <a href="index.html">Link naar home</a>
    <a href="timers.html">Link naar Timers</a>
</head>
<body>
    <div class="wrapper">
        <h1>Cat Feeder App</h1>
        <img src="Images/catimage.png" alt="sample profile pic"> 

        <h2> Enter your name </h2>
        <div class="button-container">
            <form>
            <input type="text" id="username" name="username" placeholder="Enter Username" >
            <button class="Button_Boven">Username</button>
        </form>
        </div>

        <footer> 
            <button class="Button_primary">Login</button>
        </footer>
    </div>
</body>
</html>