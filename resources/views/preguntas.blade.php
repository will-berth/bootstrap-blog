<!-- @extends('layouts.navigation-menu') -->
<x-app-layout>

    <br>
<br>
<div class="container">
    <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
        <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
        <li class="breadcrumb-item"><a class="text-primary" href="/post">Bootstrap</a></li>
        <li class="breadcrumb-item active" aria-current="page"><a href="#">Preguntas</a></li>
    </ol>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="card d-flex flex-column">
                <div class="row row-0 flex-fill">
                  <div class="col-md-3">
                    <a href="#">
                      <img src="https://wpdatatables.com/wp-content/uploads/2020/05/Fixed-Header-Table.jpg" class="w-100 h-100 object-cover" alt="Card side image">
                    </a>
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h3 class="card-title"><a href="#">Table responsive</a></h3>
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
                        <div class="ms-auto">
                          <a href="#" class="ms-3 text-info">
                            <i class="ti ti-thumb-down"></i> 10
                          </a>
                          <a href="#" class="ms-3 text-red">
                            <i class="ti ti-heart"></i> 170
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <div class="card d-flex flex-column">
              <div class="row row-0 flex-fill">
                <div class="col-md-3">
                  <a href="#">
                    <img src="https://i.stack.imgur.com/yV6OV.png" class="w-100 h-100 object-cover" alt="Card side image">
                  </a>
                </div>
                <div class="col">
                  <div class="card-body">
                    <h3 class="card-title"><a href="#">Card</a></h3>
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
                      <div class="ms-auto">
                        <a href="#" class="ms-3 text-info">
                          <i class="ti ti-thumb-down"></i> 3
                        </a>
                        <a href="#" class="ms-3 text-red">
                          <i class="ti ti-heart"></i> 55
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
</x-app-layout>