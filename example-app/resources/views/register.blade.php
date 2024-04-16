<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/pagina.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <h1>Cat Feeder App</h1>
        <img src="Images/catimage.png" alt="sample profile pic">
 
        <form method="POST" action="/register">
            @csrf
            <div>
                <input type="text" name="username" placeholder="Enter Username">
                
            </div>
            
            <div>
                 <input type="password" name="password" placeholder="Enter Password">
                
            </div>
            <button class="Button_Boven" type="submit">Register</button>
        
        </form>
        <a href="/login">Al een account?</a>
        @error('username')
                    <div class="error">{{ $message }}</div>
                @enderror
                @error('password')
                <div class="error">{{ $message }}</div>
                 @enderror
    </div>
</body>
</html>
 