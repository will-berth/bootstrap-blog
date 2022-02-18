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
            <div class="col-12 d-flex align-items-center justify-content-between blog-section">
                <h5>Componentes</h5>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2017/12/carousel.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h6 class="mt-2">Como sacar provecho de los carruseles</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                    <h6 class="mt-2">Paginación tutorial</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                    <h6 class="mt-2">Modales en formularios</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Mario</a>
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
                <h5>Layout</h5>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/11/how-to-write-a-blog-post.jpeg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h6 class="mt-2">Diseños y estructura en Bootstrap</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                    <h6 class="mt-2">Grid con bootstrap</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
                        <div class="ms-3 me-3">
                            <a href="#" class="text-body">Mario</a>
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
                    <h6 class="mt-2">Diseños adaptables con bootstrap</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                <h5>Utilidades</h5>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="post-item d-flex flex-column">
                    <div class="img-post">
                        <img src="https://i.ytimg.com/vi/XI-VYE7ftNM/maxresdefault.jpg" alt="">
                        <div class="post-hover d-flex justify-content-center align-items-center">
                            <a href="/view/post">Leer</a>
                        </div>
                    </div>
                    <h6 class="mt-2">Entender Flexbox</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
                    <h6 class="mt-2">Alineación vertical en Bootstrap 4</h6>
                    <div class="d-flex align-items-center pt-0 mt-2">
                        <span class="avatar post-avatar" style="background-image: url(https://www.show.news/__export/1595109462886/sites/debate/img/2020/07/18/goku_x2x_crop1595109404079.jpg_423682103.jpg)"></span>
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
  </main>
  <!--   Core JS Files   -->
  <script src="{{asset('dist/js/dashboard/core/popper.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('dist/js/dashboard/plugins/chartjs.min.js')}}"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "#fff",
          data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 15,
              font: {
                size: 14,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
            label: "Mobile apps",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#cb0c9f",
            borderWidth: 3,
            backgroundColor: gradientStroke1,
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

          },
          {
            label: "Websites",
            tension: 0.4,
            borderWidth: 0,
            pointRadius: 0,
            borderColor: "#3A416F",
            borderWidth: 3,
            backgroundColor: gradientStroke2,
            fill: true,
            data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
            maxBarThickness: 6
          },
        ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#b2b9bf',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#b2b9bf',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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