<nav class="bg-nav ">
    <div class="container-nav container">
        <div class="img-container">
            <img src="../../img/dc-logo.png" alt="dc-logo">         
        </div>
        <div class="container-menu">
            <ul>
                <!-- assegniamo alla li un classe dinamica cosi da modificarla se selezionata -->
                <li class="{{ Request::route()->getName() === 'homepage' ? 'active' : ''}}">
                    
                    <!--possiamo richiamare la nostra route dichiarata in web.php-->
                    <a href="{{ route('homepage') }}">COMICS</a>
                </li> 
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">SHOP</a></li>
            </ul>
        </div>  
    </div> 
</nav>