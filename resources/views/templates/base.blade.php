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
        @include('templates.header')
    </header>

    <main class="main">
            
        @yield('content')
    </main>
    
    <section>
        @include('templates.sectionPayment')
    </section>
    
    <footer>
        @include('templates.footer')
    </footer>

    <section>
        @include('templates.socialMedia')
    </section>
</body>
</html>