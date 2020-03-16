@extends('Template.modelo') 
@section('titulo', 'AnimaTron-Home')
@section('conteudo')
    <div class="row">
            <div class="col-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img  class="d-block w-100"  src="{{asset('img/aoNoExorcist.png')}}" alt="Primeiro Slide"> 
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/Dororo.jpeg')}}" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('img/Naruto.jpeg')}}" alt="Terceiro Slide">
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    
@endsection
        
