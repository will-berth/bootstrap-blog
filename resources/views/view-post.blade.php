@extends('layouts.publico')
@section('contenido')
<br>
    <br>
    <h2>{{$datosPost}}</h2>
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/post">Bootstrap</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/table">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Table responsive</a></li>
        </ol>
        <br>
        <div class="row">
          <div class="col-12">
            <div class="info-post" style="max-width: 70%;margin: 0 auto;">
              <h2>{{$datosPost[0]->contenido}}</h2>
                <span class="post-date"><time class="post-date">{{$datosPost[0]->created_at}}</time></span>
                <!-- <span class="dot"></span>
                <span class="readingtime">4 min read</span>
                <span class="wordcount">1309</span> -->
              </p>
              <img src="https://www.nicesnippets.com/upload/how-to-set-vertical-align-in-bootstrap-code.png" alt="">
            </div>
          </div>
          
          <div class="col-12">
            <div class="post-contenido mt-4" style="max-width: 70%;margin: 0 auto;">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus cum beatae id mollitia ut perferendis delectus sapiente nemo, earum iusto placeat nostrum ratione quos similique labore quod possimus ipsam sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, ducimus praesentium! Labore iste, corrupti voluptas quod, consectetur, temporibus voluptates quisquam est recusandae unde veritatis quaerat earum nisi tempora? Eligendi, delectus?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, quae molestias rem numquam culpa ex ipsa necessitatibus, fugit quam, deleniti soluta temporibus eveniet. Facere aliquid facilis dolor dolore, assumenda corporis?
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quos at beatae qui sed, voluptates assumenda autem, est quaerat doloremque blanditiis exercitationem magni itaque ratione ex ducimus repudiandae officia inventore?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ea nihil vitae ipsum corporis! Reprehenderit, rerum obcaecati cumque reiciendis quidem sint neque autem totam commodi quisquam, recusandae voluptate error debitis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque exercitationem rerum cum suscipit pariatur ullam quae beatae molestias id distinctio! Nihil omnis, repellat iste eaque sunt ipsa suscipit reprehenderit commodi!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur non ullam ipsam corrupti tempore labore quaerat harum earum nesciunt consequatur explicabo incidunt, totam libero dolorum laboriosam odio, atque quibusdam itaque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus consequuntur atque, nemo reprehenderit, iste possimus vel provident distinctio ducimus quam dolorem corrupti temporibus cupiditate aliquid in iure sit perspiciatis dignissimos.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro voluptatem maiores qui alias dignissimos tenetur, itaque numquam iusto, beatae assumenda nemo saepe corrupti earum unde dolor obcaecati ab nisi nihil.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore blanditiis amet necessitatibus aliquam labore reprehenderit corporis quod esse. Eius omnis error porro a tempore, voluptates illum laboriosam alias at quam!

              </p>
            </div>
          </div>
        </div>

        

        <!-- COMENTARIOS -->
            <div class="row mt-4">
              <div class="col-lg-12">
                <div class="card" style="max-width: 70%;margin: 0 auto;">
                  <div class="card-header">
                    <div class="input-group">
                      <form id="addComentario" class="w-100 d-flex">
                        <input id="texto" name="texto" type="text" class="form-control me-3" placeholder="Escriba un comentario">
                        <input value="{{$datosPost[0]->id_user}}" name="id_user" style="display: none;" id="id_user" type="number" class="form-control">
                        <input value="{{$datosPost[0]->id}}" name="id_post" style="display: none;" id="id_post" type="number" class="form-control">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M3 20l1.3 -3.9a9 8 0 1 1 3.4 2.9l-4.7 1"></path>
                              <line x1="12" y1="12" x2="12" y2="12.01"></line>
                              <line x1="8" y1="12" x2="8" y2="12.01"></line>
                              <line x1="16" y1="12" x2="16" y2="12.01"></line>
                            </svg>
                            Comentar
                          </button>
                        </div>
                      </form>
                      
                    </div>
                  </div>

                  <ul id="cajaComentarios" class="list-group card-list-group">
                    <!-- <li class="list-group-item py-5">
                      <div class="media d-flex">
                        <div class="media-object avatar avatar-md mr-4 me-3" style="background-image: url('https://i.blogs.es/66b2a4/photo-1511367461989-f85a21fda167/1366_2000.jpeg');min-width: 60px;"></div>
                        <div id="comentario-1" class="media-body">
                          <div class="media-heading d-flex justify-content-between align-items-ends">
                            <div class="">
                              <small class="float-right text-muted">4 min</small>

                              <h5>Peter Richards</h5>
                            </div>
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-info">Responder</button>
                            </div>
                          </div>
                          <div>
                            Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras
                            justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes,
                            nascetur ridiculus mus.
                          </div>
                          <ul id="cajaRespuestas-com-100" class="media-list">
                            <li class="media mt-4 d-flex">
                              <div class="media-object avatar mr-4 me-3" style="background-image: url('https://www.trecebits.com/wp-content/uploads/2020/06/Foto-perfil-gay-800x445.jpg'); min-width: 40px;"></div>
                              <div class="media-body">
                                <strong>Debra Beck: </strong>
                                Donec id elit non mi porta gravida at eget metus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus
                                auctor fringilla. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Sed posuere consectetur est at lobortis.
                              </div>
                            </li>
                            <li class="media mt-4 d-flex">
                              <div class="media-object avatar mr-4 me-3" style="background-image: url('https://img.wattpad.com/0227e689fb13e2f2b397fcd91aa45a4f68807fae/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f2d71454769566b7646754d4773413d3d2d32362e313630643937663637333934326637323934313532333132303336312e6a7067?s=fit&w=720&h=720'); min-width: 40px;"></div>
                              <div class="media-body">
                                <strong>Jack Ruiz: </strong>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                amet risus.
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item py-5">
                      <div class="media d-flex">
                        <div class="media-object avatar avatar-md mr-4 me-3" style="background-image: url('https://i.blogs.es/66b2a4/photo-1511367461989-f85a21fda167/1366_2000.jpeg');min-width: 60px;"></div>
                        <div class="media-body">
                          <div class="media-heading d-flex justify-content-between align-items-ends">
                            <div class="">
                              <small class="float-right text-muted">16 min</small>

                              <h5>Wilberth López</h5>
                            </div>
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-info">Responder</button>
                            </div>
                          </div>
                          <div>
                            Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cum sociis natoque penatibus et magnis dis
                            parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          </div>
                        </div>
                      </div>
                    </li> -->
                  </ul>
                </div>

              </div>
            </div>

        </div>
            
        </div>

  <script>
    $(document).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $.ajax({  
          type : 'POST',
          url  : "{{route('comentari.post')}}",
          data:  {'id': {{$datosPost[0]->id}}},
          success: function(response){
            response.forEach(element => {
              getRespForComment(element.id, function(respuestas){
                $('#cajaComentarios').append(`
                    <li class="list-group-item py-5">
                      <div class="media d-flex">
                        <div class="media-object avatar avatar-md mr-4 me-3" style="background-image: url('https://i.blogs.es/66b2a4/photo-1511367461989-f85a21fda167/1366_2000.jpeg');min-width: 60px;"></div>
                        <div class="media-body w-100">
                          <div class="media-heading d-flex justify-content-between align-items-ends">
                            <div class="">
                              <small class="float-right text-muted">${element.created_at.split('T')[0]}</small>

                              <h5>${element.name}</h5>
                            </div>
                          </div>
                          <div>
                            ${element.texto}
                          </div>
                          <ul id="cajaRespuestas-com-${element.id}" class="media-list">
                            <form id="addRespuesta-${element.id}" class="w-100 d-flex mt-4">
                              <input name="texto" type="text" class="form-control me-3" placeholder="Escriba un comentario">
                              <input value="2" name="id_user" style="display: none;" id="id_post" type="number" class="form-control">
                              <input value="${element.id}" name="id_comentario" style="display: none;" id="id_post" type="number" class="form-control">
                              <div class="input-group-append">
                                <button type="submit" class="btn">
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                    <polyline points="7 9 12 4 17 9"></polyline>
                                    <line x1="12" y1="4" x2="12" y2="16"></line>
                                  </svg>
                                  Responder
                                </button>
                              </div>
                            </form>
                          </ul>
                        </div>
                      </div>
                    </li>
                `);
                $(`#addRespuesta-${element.id}`).submit(function(e){
                  e.preventDefault();
                  let currentDate = new Date();
                  let dataRespuesta = $(this).serialize() + '&created_at=' + currentDate + '&updated_at=' + currentDate;
                  $.ajax({
                    type : 'POST',
                    url  : "{{route('addRespuesta')}}",
                    data:  dataRespuesta,
                    success: function(response){
                      console.log(response);
                    }
                  });
                });
                if(respuestas.length > 0){
                  respuestas.forEach(item => {
                    $(`#cajaRespuestas-com-${element.id}`).append(`
                      <li class="media mt-4 d-flex">
                        <div class="media-object avatar mr-4 me-3" style="background-image: url('https://www.trecebits.com/wp-content/uploads/2020/06/Foto-perfil-gay-800x445.jpg'); min-width: 40px;"></div>
                        <div class="media-body">
                          <strong>${item.name}: </strong>
                          ${item.texto}
                        </div>
                      </li>
                    `);
                  });
                  
                }
                console.log(element);
                console.log(respuestas);
              });
            });
          }  
      });
      function getRespForComment(idComentario, callback){
        $.ajax({
          type : 'POST',
          url  : "{{route('resp.post')}}",
          data:  {'id': idComentario},
          success: function(response){
            callback(response);
          }
        });
      }

      $('#addComentario').submit(function(e){
        e.preventDefault();
        let currentDate = new Date();
        let dataComent = $(this).serialize() + '&created_at=' + currentDate + '&updated_at=' + currentDate;
        $.ajax({
          type : 'POST',
          url  : "{{route('addComentario')}}",
          data:  dataComent,
          success: function(response){
            console.log(response);
          }
        });
      });

    });
  </script>
@endsection