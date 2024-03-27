<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <p> times pressed: {{$count->times_pressed}} </p>
    <p> led state is {{$led->led_is_on}}</p>
    <a href="toggle_led"> KLIK HIER VOOR LED CHANGE</a>

    <form action="{{ url('/aanroepen') }}" method="POST">
    @csrf
    <input type="time" min="09:00" max="18:00" required id="Test_DatetimeLocal" value="0:00" name="test">

    <button type="submit"> CONTINUE </button>
</form>
<form method="POST" action="{{ url('/aanroepen') }}">
    <p> Zo laat word er eten gegeven: {{$tijd->tijd1}} </p>
</form>
</body>
</html>