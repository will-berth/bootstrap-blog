@extends('layouts.publico')
@section('contenido')
    <br>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="empty">
                <img src="{{ URL::asset("img/404.jpg")}}"  alt="" width="300">
                    <h1 class="empty-title">OPS...</h1>
                    <p class="empty-subtitle text-muted">
                        El recurso no esta disponible o no existe.
                    </p>
                    <div class="empty-action">
                        <a href="/" class="btn btn-primary">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <!-- SVG icon code -->
                        VOLVER
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection