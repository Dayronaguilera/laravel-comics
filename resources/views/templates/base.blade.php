<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
 
    <title>Dc Comics</title> <!--- il titolo sara dinamico -->
</head>
<body>
    <header>HEADER</header>

        <div class="container">
            
            @yield('content')
        </div>       

    <footer>FOOTER</footer>
</body>
</html>