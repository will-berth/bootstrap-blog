@extends('layouts.publico')
@section('contenido')

    <div class="container mt-3">
        <div class="row">
            @foreach ($categorias as $categoria)
                <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                    <h2>{{$categoria->categoria}}</h2>
                    <a class="more-content" href="/categoria/{{strtolower($categoria->categoria)}}">Ver más</a>
                </div>
                @php
                    $contador = 1;
                @endphp
                @foreach ($posts as $item)
                    @if ($categoria->categoria == $item->categoria && $contador <= 3)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-item d-flex flex-column caja-animado">
                                <div class="img-post">
                                    <!-- <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/12/carousel.jpg" alt=""> -->
                                    <img src="{{ asset('img/posts/'.$item->imagen) }}" alt="">
                                    <div class="post-hover d-flex justify-content-center align-items-center">
                                        <a href="/post/{{ $item->id }}">Leer</a>
                                    </div>
                                </div>
                                <h3 class="mt-2">{{$item->contenido}}</h3>
                                <div class="d-flex align-items-center pt-0 mt-2">
                                    <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                                    <div class="ms-3 me-3">
                                        <a href="#" class="text-body">{{$item->name}}</a>
                                        <div class="text-muted">{{$item->created_at}}</div>
                                    </div>
                                    <div class="ms-3">
                                        <a href="#" class="text-body"><i class="ti ti-message-circle"></i> {{$item->comentarios_cant}}</a>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        @php
                            $contador++;
                        @endphp
                    @endif
                @endforeach
            @endforeach
        </div>
    </div>
@endsection