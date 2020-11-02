@extends('adminlte::page')

@section('title','Home')

@section('content_header')
    <h1>Home</h1>
@stop

@section('content')
    
    <h1>Welcome</h1>
    <br></br>
    <br></br>
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
        
                <div class="carousel-item" data-interval="2000">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
        
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

@stop

@section('css')
@stop

@section('js')
@stop


