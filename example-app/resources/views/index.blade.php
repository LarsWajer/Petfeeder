<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Voeder app</title>
</head>
<body>
    <a href="/">Link naar Timers</a>

    <div class="wrapper">
        <h1>Cat feeder app</h1>
        <img src="Images/profielfoto.jpg" alt="sample profile pic"> 
        <figure> profielfoto gebruiker </figure>
        <h2> 
            Welkom: {{ Auth::user()->username }}
        </h2>

        <form method="POST" action="/logout">
            @csrf
            <button class="Button_Boven" type="submit">Logout</button>
        </form>


        
    </div>
</body>
</html>
