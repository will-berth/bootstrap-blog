@extends('layouts.publico')
@section('contenido')

    <div class="container mt-3">

        <div class="row">
            <div class="col-12">
                <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a class="text-primary" href="/categorias">Categorias</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Layouts</a></li>
                </ol>
            </div>
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="post-item d-flex flex-column">
                        <div class="img-post">
                            <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" alt="">
                            <div class="post-hover d-flex justify-content-center align-items-center">
                                <a href="/post/{{ $item->id }}">Leer</a>
                            </div>
                        </div>
                        <h3 class="mt-2">{{ $item->contenido }}</h3>
                        <div class="d-flex align-items-center pt-0 mt-2">
                            <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                            <div class="ms-3 me-3">
                                <a href="#" class="text-body">{{ $item->name }}</a>
                                <div class="text-muted">{{ $item->created_at }}</div>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
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
                            <a href="">Leer</a>
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
                            <a href="">Leer</a>
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
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item">
                    <div class="img-post">
                        <img src="https://blogthinkbig.com/wp-content/uploads/sites/4/2017/12/responsive-web-pages-websites.png?fit=1280%2C720" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="">Leer</a>
                        </div>
                    </div>
                    <h3 class="mt-2">Comprueba si tu pagina web es responsiva</h3>
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
        </div>
    </div>
@endsection