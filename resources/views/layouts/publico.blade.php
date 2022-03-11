<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{ asset('dist/css/estiloGeneral.css') }}" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <title>BootstrapBlog</title>
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('iconfont/tabler-icons.min.css')}}">
    <style>
      body{
        overflow-x: hidden;
      }
      .btnTop{
        opacity: 0;
        transition: all 0.3s;
        width: 40px;
        height: 40px;
        background-color: #4F46E5;
        position: fixed;
        bottom: 15px;
        left: 15px;
        z-index: 100;
        border-radius: 100px;
      }
      .caja-animado{
        opacity: 0;
        transition: all 0.5s;
      }
      .content-loader{
        position: absolute;
        width: 100vw;
        height: 100vh;
        background-color: white;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      #preloader_1{
          position:relative;
      }
      #preloader_1 span{
          display:block;
          bottom:0px;
          width: 9px;
          height: 5px;
          background:#9b59b6;
          position:absolute;
          animation: preloader_1 1.5s  infinite ease-in-out;
      }
      
      #preloader_1 span:nth-child(2){
      left:11px;
      animation-delay: .2s;
      
      }
      #preloader_1 span:nth-child(3){
      left:22px;
      animation-delay: .4s;
      }
      #preloader_1 span:nth-child(4){
      left:33px;
      animation-delay: .6s;
      }
      #preloader_1 span:nth-child(5){
      left:44px;
      animation-delay: .8s;
      }
      @keyframes preloader_1 {
          0% {height:5px;transform:translateY(0px);background:#9b59b6;}
          25% {height:30px;transform:translateY(15px);background:#3498db;}
          50% {height:5px;transform:translateY(0px);background:#9b59b6;}
          100% {height:5px;transform:translateY(0px);background:#9b59b6;}
      }
    </style>
    
</head>
<body id="#body">
  <div class="content-loader">

    <div id="preloader_1">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>


  <button id="btnTopScroll" class="btnTop d-flex justify-content-center align-items-center text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
</svg></button>
<div class="container">
<svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
            <polygon points="50,0 100,0 50,100 0,100" />
          </svg>
    
          <div>
            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
              <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="/">
                      <span class="sr-only">Workflow</span>
                      <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                      <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
                  <a href="/categoria" class="font-medium text-gray-500 hover:text-gray-900">Categorias</a>

                  <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Preguntas</a>
    
                  <a href="/aboutus" class="font-medium text-gray-500 hover:text-gray-900">Quienes somos</a>
                </div>
              </nav>
            </div>
    
            <!--
              Mobile menu, show/hide based on menu open state.
    
              Entering: "duration-150 ease-out"
                From: "opacity-0 scale-95"
                To: "opacity-100 scale-100"
              Leaving: "duration-100 ease-in"
                From: "opacity-100 scale-100"
                To: "opacity-0 scale-95"
            -->
            <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
              <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                  <div>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                  </div>
                  <div class="-mr-2">
                    <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                      <span class="sr-only">Close main menu</span>
                      <!-- Heroicon name: outline/x -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Product</a>
    
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Features</a>
    
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Marketplace</a>
    
                  <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Company</a>
                </div>
                <a href="#" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Log in </a>
              </div>
            </div>
          </div>
</div>
      @yield('contenido')
      <script>
        $(window).on('load', function () {
            $('.content-loader').delay(1500).fadeOut('slow');
        });
        $(document).ready(function(){
          $('#btnTopScroll').click(function(){
            console.log('hhola')
            $('html, body').animate({scrollTop:0}, 700);
          })
          $(window).scroll(function(){
            let cont = 0;
            if($(this).scrollTop() > 100){
              console.log('100 scrol')
              $('#btnTopScroll').css('opacity', '10')
              $('#btnTopScroll').css('transition', 'all 0.5s')
            }else{
              console.log($(this).scrollTop())
              $('#btnTopScroll').css('opacity', '0')
            }

          })

          let animado = document.querySelectorAll('.caja-animado');
          $(window).scroll(function(){
            console.log('verificando')
            for(let i = 0; i < animado.length; i++){
              let alturaPost = animado[i].offsetTop;
              console.log(i)
              if(alturaPost / 3 < $(this).scrollTop()){
                animado[i].style.opacity = 1;
              }
            }
          })

          function animadoPosts(){}
        })
      </script>
</body>
</html>