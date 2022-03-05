@extends('layouts.admin-menu')
@section('contenido-admin')
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Mis Posts</h6>
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
        <div class="col-lg-6 mt-3">
            <div class="card d-flex flex-column">
                <div class="row row-0 flex-fill">
                  <div class="col-md-3">
                    <a href="#">
                      <img src="https://wpdatatables.com/wp-content/uploads/2020/05/Fixed-Header-Table.jpg" class="w-100 h-100 object-cover" alt="Card side image">
                    </a>
                  </div>
                  <div class="col">
                    <div class="blackSecondActive card-body">
                      <h4 class="card-title"><a href="#">Table responsive</a></h4>
                      <div class="text-muted">Ejemplo basico de una tabla adaptable a cualquier dispositivo movil</div>
                      <div class="d-flex align-items-center pt-4 mt-auto">
                        <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                          <a href="#" class="text-body">Miguel JS</a>
                          <div class="text-muted">Hace 3 dias</div>
                        </div>
                        <div class="ms-3">
                          <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 230</a>
                        </div>
                        <div class="ms-3">
                          <a href="#" class="text-body"><i class="ti ti-eye"></i> 400</a>
                        </div>
                        <div class="ms-3">
                        <a href="#" class="text-info">
                            <i class="ti ti-thumb-down"></i> 10
                          </a>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="text-red">
                            <i class="ti ti-heart"></i> 170
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3">
          <div class="card d-flex flex-column">
              <div class="row row-0 flex-fill">
                <div class="col-md-3">
                  <a href="#">
                    <img src="https://i.stack.imgur.com/yV6OV.png" class="w-100 h-100 object-cover" alt="Card side image">
                  </a>
                </div>
                <div class="col">
                  <div class="blackSecondActive card-body">
                    <h4 class="card-title"><a href="#">Card</a></h4>
                    <div class="text-muted">Ejemplo avanzado de un card responsivo con Bootstrap 5 XDDDDDDDDDDDDDDDDDDDD</div>
                    <div class="d-flex align-items-center pt-4 mt-auto">
                      <span class="avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                      <div class="ms-3 me-3">
                        <a href="#" class="text-body">Miguel JS</a>
                        <div class="text-muted">Hace 8 dias</div>
                      </div>
                      <div class="ms-3">
                        <a href="#" class="text-body"><i class="ti ti-message-circle"></i> 30</a>
                      </div>
                      <div class="ms-3">
                        <a href="#" class="text-body"><i class="ti ti-eye"></i> 90</a>
                      </div>
                      <div class="ms-3">
                        <a href="#" class="text-info">
                            <i class="ti ti-thumb-down"></i> 10
                          </a>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="text-red">
                            <i class="ti ti-heart"></i> 170
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
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