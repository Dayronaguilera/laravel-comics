<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
 
    <title>Dc Comics - @yield('title')</title> <!--- il titolo sara dinamico -->
</head>
<body>
    <header>
        @include('templates.header') <!-- richiamiamo i nostri template in base cosi da poter dividere i componenti -->
    </header>

    <main class="main">   
        @yield('main') <!-- il nostro segna posto per il main che verra costruito in home -->
    </main>
    
    <section class="payment">
        @yield('payment') <!-- il nostro segna posto per la section payment che verra costruito in home -->
    </section>
    
    <footer>
        @include('templates.footer') <!-- richiamiamo i nostri template in base cosi da poter dividere i componenti -->
    </footer>

    <section>
        @include('templates.socialMedia') <!-- richiamiamo i nostri template in base cosi da poter dividere i componenti -->
    </section>
</body>
</html>