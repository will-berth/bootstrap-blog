@extends('layouts.admin-menu')
@section('contenido-admin')
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Nuevo Usuario</h6>
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
    <form id="adduser" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm" onsubmit="event.preventDefault();">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <label class="form-label required">Nombre</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-signature"></i>
                    </span>
                    <input type="text" name="nombre" class="form-control" placeholder="Escribe el nombre" pattern="[a-zA-Záéóíú  ]{2,50}" title="Nombre, sólo letras" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Apellido materno</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-writing"></i>
                    </span>
                    <input type="text" name="app" class="form-control" placeholder="Escribe el apellido paterno" pattern="[A-Za-zñÑáéóíú]{2,50}" title="Apellido paterno, sólo letras" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Apellido materno</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-writing"></i>
                    </span>
                    <input type="text" name="apm" class="form-control" placeholder="Escribe el apellido materno" pattern="[A-Za-zñÑáéóíú]{2,50}" title="Apellido materno, sólo letras" required>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label required">Sexo</label>
                <select class="form-select" name="sexo" required>
                    <option value="" disabled selected> Elige una opción</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Nombre de usuario</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-user"></i>
                    </span>
                    <input type="text" name="nombre_user" class="form-control" minlength="8" maxlength="15" pattern="[A-Za-z0-9]{8,15}" title="Nombre de usuario, sólo letras y numeros, sin espacios o caracteres especiales" placeholder="Escribe un nombre de usuario. Ej: mario123" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Correo</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-mail"></i>
                    </span>
                    <input type="email" name="correo" class="form-control" placeholder="Dirección de correo electrónico. Ej: mario@gmail.com" required>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label required">Contraseña</label>
                <div class="input-icon mb-3">
                    <span class="input-icon-addon">
                      <i class="ti ti-lock"></i>
                    </span>
                    <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="Contraseña, de 8 a 12 caracteres, se requiere por lo menos una letra mayuscula, minuscula, un numero y un caracter especial">
                </div>
            </div>
        </div>
        <br>
        <br>
        <button class="btn btn-teal" type="submit">Crear usuario</button>
    </form>
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