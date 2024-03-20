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

    <h4> Date:
        <input type="time" id="Test_DatetimeLocal">
        
    </h4>
<form method="GET" action="{{ url('/aanroepen') }}">

    <button type="submit">Submit</button>
    <p> De tijd is: {{$tijd->tijd1 }} </p>
</form>
</body>
</html>