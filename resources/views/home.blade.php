
@extends('templates.base') <!--  Estenzione del mio templates base senza il main -->

@section('title', 'HomePage') 

@section('main') <!-- nel nostro segna posto di base a schermo si vedra questa section -->
    <div class="container ">
        @foreach($comics as $comicsSingle) <!-- cicliamo nel nostro array database(comics) e ci facciamo stampare il necessario x il leyaout -->
            <a href="/singleComics/{{ $loop->iteration }}">
                <div>
                    {{$comicsSingle['title']}}
                </div>   
            </a> 
        @endforeach
    </div>
@endsection
