
@extends('templates.base') <!--  Estenzione del mio templates base senza il main -->

@section('title', 'HomePage') 

@section('main') <!-- nel nostro segna posto di base a schermo si vedra questa section -->
    <div class="jumbotron">
        
    </div>
    <div class="bg-main">
        <div class="container ">
            <div class="row comics-cont">
                @foreach($comics as $comicsSingle) <!-- cicliamo nel nostro array database(comics) e ci facciamo stampare il necessario x il leyaout -->
                    <div class="cont-card">
                        <a href="/singleComics/{{ $loop->index }}"> <!-- con loop possiamo far si che ci ritorni un certo tipo di dato in questo caso un index che inviamo alla single card -->
                            <div class="img-container">
                                <img src="{{$comicsSingle['thumb']}}" alt="">
                            </div>
                            <span>{{$comicsSingle['series']}}</span>   
                        </a>
                    </div> 
                @endforeach
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
@endsection
