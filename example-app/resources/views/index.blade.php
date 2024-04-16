<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Voeder app</title>
</head>
<body>
    <a href="/login">Link naar inlog</a>
    <a href="/">Link naar Timers</a>

    <div class="wrapper">
        <h1>Cat feeder app</h1>
        <img src="Images/profielfoto.jpg" alt="sample profile pic"> 
        <figure> profielfoto gebruiker </figure>
        <h2> 
            Welkom: {{ Auth::user()->username }}
        </h2>
        <div class="button-container">
            <button class="Button_Boven">My Account</button>
        </div>
        <section>  Next planned feeding time: 22-4-2023, 16:20
        </section>
        <button class="Button_midden">Timer</button>
        <button class="Button_midden">Feed Record</button>
        <footer> 
        
            
            <div class="feed-buttons">
                

                <div class="feed_ammount_button">
                    <button class="Button_secondary">Feed ammount</button>
                    
                </div>
                

                <div class="feed_button_zelf">
                    <button class="Button_primary">Feed!</button>
                </div>
            </div>   
            <section class="feed_amount">
                <div class="feed-controls"> 
                    <button class="Button_secondary minus-button">-</button> 
                </div>
                <span class="feed-amount-text">100 gr.</span> 
                <div class="feed-controls">
                    <button class="Button_secondary plus-button">+</button> 
                </div>
            </section>       
            </div>

           
            
        </footer>
    </div>
</body>
</html>
