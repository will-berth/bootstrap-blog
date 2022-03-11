@extends('layouts.admin-menu')
@section('contenido-admin')
  
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder mb-0">Nuevo Post</h6>
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
    <form id="createPost" action="" class="shadow-sm rounded p-4 blackSecondActive" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Contenido</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-signature"></i>
                        </span>
                        <input name="contenido" type="text" value="" class="form-control" required pattern="[a-zA-Z0-9áéóíú  ]{2,200}" placeholder="Escriba un titulo">
                        <input value="{{auth()->user()->id}}" name="id_user" style="display: none;" id="id_post" type="number" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Categoria</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-writing-sign"></i>
                        </span>
                        <input name="categoria" type="text" value="" class="form-control" required pattern="[a-zA-Z0-9áéóíú  ]{2,200}" placeholder="Agregue una categoria">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Tags</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-writing-sign"></i>
                        </span>
                        <input name="tags" type="text" value="" class="form-control" required pattern="[a-zA-Z0-9áéóíú,,,,,,,  ]{2,200}" placeholder="Agregue sus tags. ej: Flexbox,Layouts,Formularios">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label required">Imagen</label>
                    <div class="input-icon mb-3">
                        <span class="input-icon-addon">
                          <i class="ti ti-photo"></i>
                        </span>
                        <input id="imagen" type="file" name="imagen" value="" class="form-control">
                    </div>
                </div>
                <!-- <div class="col-md-4 mb-3">
                    <label class="form-label required">Código</label>
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Código"></textarea>
                </div> -->
            </div>
            <br>
            <button type="submit" class="btn btn-success">Crear post</button>
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
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#createPost').submit(function(e){
        e.preventDefault();
        // let dataPost = $(this).serialize();
        let dataPost = new FormData(this);
        dataPost.append('_token', $('input[name=_token]').val());
        $.ajax({
          url  : "{{route('post.create')}}",
          type : 'POST',
          data: dataPost,
          cache: false,
          contentType : false,
          processData: false,
          success: function(response){
            $('#createPost').trigger('reset');
          }
        })
      });
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