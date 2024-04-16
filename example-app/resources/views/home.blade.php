<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/timers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <a href="/index">Link naar home</a>
</head>
<body>
    <header>
        <h1>Feeding Moments</h1>
    </header>
    <div class="grid_container">
        <section class="timers_sect">
            <form method="POST" action="{{ url('/aanroepen') }}" class="timer_container">
                <p> Your first feeding moment is: {{$tijd->tijd1}} </p> 
            </form>
            <form method="POST" action="{{ url('/aanroepen2') }}" class="timer_container">
                <p> Your second feeding moment is: {{$tijd->tijd2}} </p>
            </form>
            <form method="POST" action="{{ url('/aanroepen3') }}" class="timer_container">
                <p> Your third feeding moment is: {{$tijd->tijd3}} </p>
            </form>
        </section>
        <section class="add_timer">
            <div class="grid_in_sect">
                <p class="label">First moment</p>
                <form action="{{ url('/aanroepen') }}" method="POST" class="input_time">
                    @csrf
                    <input type="time" min="00:01" max="23:59" required id="Test_DatetimeLocal" value="0:00" name="test" >
                
                    <button type="submit" class="add_button"> CONTINUE </button>
                </form>
                <p class="label2">Second Moment</p>
                <form action="{{ url('/aanroepen2') }}" method="POST" class="input_time2">
                    @csrf
                    <input type="time" min="00:01" max="23:59" required id="Test_DatetimeLocal" value="0:00" name="test2" >
                
                    <button type="submit" class="add_button"> CONTINUE </button>
                </form>
                <p class="label3">Third Moment</p>
                <form action="{{ url('/aanroepen3') }}" method="POST" class="input_time3">
                    @csrf
                    <input type="time" min="00:01" max="23:59" required id="Test_DatetimeLocal" value="0:00" name="test3" >
                
                    <button type="submit" class="add_button"> CONTINUE </button>
                </form>

            </div>
        </section>
    </div> 
</body>
    <!-- <form action="{{ url('/aanroepen') }}" method="POST">
    @csrf
    <input type="time" min="09:00" max="18:00" required id="Test_DatetimeLocal" value="0:00" name="test">

    <button type="submit"> CONTINUE </button>
</form>
<form method="POST" action="{{ url('/aanroepen') }}">
    <p> Zo laat wordt de eerste keer eten gegeven: {{$tijd->tijd1}} </p>
</form>
<body>
    <form action="{{ url('/aanroepen2') }}" method="POST">
    @csrf
    <input type="time" min="09:00" max="18:00" required id="Test_DatetimeLocal" value="0:00" name="test2">

    <button type="submit"> CONTINUE </button>
</form>
<form method="POST" action="{{ url('/aanroepen2') }}">
    <p> Zo laat wordt de tweede keer eten gegeven: {{$tijd->tijd2}} </p>
</form>
<body>
    <form action="{{ url('/aanroepen3') }}" method="POST">
    @csrf
    <input type="time" min="09:00" max="18:00" required id="Test_DatetimeLocal" value="0:00" name="test3">

    <button type="submit"> CONTINUE </button>
</form>
<form method="POST" action="{{ url('/aanroepen3') }}">
    <p> Zo laat wordt er de derde keer eten gegeven: {{$tijd->tijd3}} </p>
</form>
</body> -->
</html>