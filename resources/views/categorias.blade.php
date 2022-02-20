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
                            <div class="post-item d-flex flex-column">
                                <div class="img-post">
                                    <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/12/carousel.jpg" alt="">
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
                                        <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
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

        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                <h2>Componentes</h2>
                <a class="more-content" href="/componentes">Ver más</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/12/carousel.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Como sacar provecho de los carruseles</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2016/08/pagination.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Paginación tutorial</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/09/modal-form-fb.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Modales en formularios</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                         
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                <h2>Layout</h2>
                <a class="more-content" href="/layouts">Ver más</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Diseños y estructura en Bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://miro.medium.com/max/5510/1*K8M7c0mJaZokR5uH82xdCw.png" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Grid con bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://deideaaapp.org/wp-content/uploads/2014/05/responsive.png.webp" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Diseños adaptables con bootstrap</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                <h2>Utilidades</h2>
                <a class="more-content" href="#">Ver más</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://i.ytimg.com/vi/XI-VYE7ftNM/maxresdefault.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Entender Flexbox</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Miguel JS</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://www.nicesnippets.com/upload/how-to-set-vertical-align-in-bootstrap-code.png" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Alineación vertical en Bootstrap 4</h3>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Wilberth LP</a>
                            <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                            <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection