@extends('layouts.admin-menu')
@section('contenido-admin')
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          
          <h6 class="font-weight-bolder mb-0">Publicaciones</h6>
        </nav>
        <div class="d-flex justify-content-end collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
            @foreach ($categorias as $categoria)
                <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                    <h5>{{$categoria->categoria}}</h5>
                </div>
                @foreach ($posts as $item)
                    @if ($categoria->categoria == $item->categoria)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="post-item d-flex flex-column">
                                <div class="img-post">
                                    <!-- <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/12/carousel.jpg" alt=""> -->
                                    <img src="{{ asset('img/posts/'.$item->imagen) }}" alt="">
                                    <div class="post-hover d-flex justify-content-center align-items-center">
                                        <a href="/post/{{ $item->id }}">Leer</a>
                                    </div>
                                </div>
                                <h5 class="mt-2">{{$item->contenido}}</h5>
                                <div class="d-flex align-items-center pt-0 mt-2">
                                    <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                    @endif
                @endforeach
            @endforeach
        </div>

    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('dist/js/dashboard/core/popper.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/chartjs.min.js')}}"></script>
  
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{asset('dist/js/dashboard/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
@endsection