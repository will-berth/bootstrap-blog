@extends('layouts.publico')
@section('contenido')
<br>
@if($auth)
  @php
    $userAuth = $auth->id;
  @endphp
@else
  @php
    $userAuth = 0;
  @endphp
@endif
    <br>
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/categoria">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$datosPost[0]->contenido}}</a></li>
        </ol>
        <br>
        <div class="row">
          <div class="col-12">
            <div class="info-post" style="max-width: 70%;margin: 0 auto;">
              <h2 style="font-size: 2rem;">{{$datosPost[0]->contenido}}</h2>
              <div class="">
                <span class="p">Por: {{$autor[0]->name}}</span>
              </div>
                <span class="post-date"><time class="post-date">{{$datosPost[0]->created_at}}</time></span>
                <!-- <span class="dot"></span>
                <span class="readingtime">4 min read</span>
                <span class="wordcount">1309</span> -->
              </p>
              @php
                $tags = explode(",", $datosPost[0]->tags);
              @endphp
              <div class="tags mb-2">
                @foreach($tags as $itemTag)
                  <span class="badge bg-info">{{$itemTag}}</span>
                @endforeach
              </div>
              <!-- <img src="https://www.nicesnippets.com/upload/how-to-set-vertical-align-in-bootstrap-code.png" alt=""> -->
              <img src="{{ asset('img/posts/'.$datosPost[0]->imagen) }}" alt="">
            </div>
          </div>
          
          <div class="col-12">
            <div class="post-contenido mt-4" style="max-width: 70%;margin: 0 auto;">
              <p class="caja-animado" style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse inventore consectetur possimus voluptatem molestiae ab facere cum commodi deserunt, nobis explicabo quae non repellat ad aut iusto fuga blanditiis aliquam!
              Sit officia molestiae ab sint ducimus cupiditate quidem. Nemo nesciunt laboriosam corrupti repudiandae ut architecto esse fuga, blanditiis nobis odit distinctio dignissimos voluptate, omnis animi, quis deleniti veniam! Eius, dignissimos.
              Ullam quam voluptatum vel repellat, obcaecati maxime rem aut natus soluta velit unde et harum accusantium laboriosam nemo laudantium! Nihil dignissimos sint animi qui aut autem, asperiores deserunt beatae quo.
              Labore dolorem doloribus mollitia officiis, sint dolorum ut dolore. Enim, quas! Cumque eaque reiciendis qui unde fuga repellendus molestiae earum necessitatibus, aut, suscipit sint dolorum vitae quas fugit, id ad!
              Libero ad, a non doloremque minus commodi hic, error quae facere quod saepe vel veritatis qui iusto debitis! Sequi, quas nihil. Voluptatem excepturi suscipit quidem ullam quam totam molestiae veritatis?
              Quas odit dolorem voluptatem pariatur quam quibusdam suscipit enim excepturi possimus facilis minima quia assumenda libero voluptate voluptatibus quae accusamus aspernatur reprehenderit, velit illo delectus dolorum ex fugiat repudiandae. Nisi.
              Fugit inventore perferendis veniam voluptas saepe maxime aut assumenda eius illo. Animi maxime itaque sit minus impedit, fuga ullam quasi inventore ipsa sint optio voluptatum ea mollitia eos obcaecati labore.
              Ad quasi soluta obcaecati, similique a facere laboriosam est eaque asperiores ex sit debitis laudantium eum saepe eligendi? Inventore culpa quasi commodi porro iure voluptate laboriosam cumque vel doloremque saepe.</p>
              <p class="caja-animado" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam delectus quo deleniti aliquam, error totam sed ab ullam repellendus numquam quas modi illo quis nihil aperiam maiores, laboriosam fugit dolor?
              Beatae quibusdam sed ad rerum corporis impedit illo molestiae delectus pariatur, dolorum quidem in quas officia. Obcaecati, odio, inventore sequi sint eaque corporis asperiores non, quod vel deserunt incidunt eum!
              Qui sunt voluptatibus, amet harum eligendi tenetur aperiam, quidem corrupti soluta fuga optio! Alias fugit hic suscipit vel iste est sed eveniet, animi sequi velit, quidem similique! Fugit, adipisci nemo.
              Quo, nesciunt voluptas officiis cupiditate rem ab id repellendus distinctio consequuntur expedita tenetur reprehenderit harum tempore pariatur minus asperiores illo ipsum dolorum obcaecati nisi ex iure veniam cumque! Odit, distinctio.
              Hic cumque neque delectus reprehenderit, et amet dignissimos earum laudantium? Doloribus, ipsum fugit molestiae a magni dolores temporibus quasi debitis dolor unde, minus odio cumque accusamus repellat sequi adipisci. Dolor.</p>
              <p class="caja-animado" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam inventore laudantium aliquam eius? Quaerat amet aspernatur distinctio saepe, voluptatum facere velit totam, molestiae consequatur ex veniam deleniti dolorum, aut obcaecati?
              Quos eos autem at eligendi! Adipisci non ratione soluta vitae. Iusto quos veniam dolores molestias animi tenetur. Deserunt quidem cum voluptatibus totam maiores illo architecto dicta, provident minima necessitatibus. Dolores.
              Dolores provident voluptate sapiente in quo incidunt ullam optio ducimus expedita, vero libero hic. Ad maiores unde, quidem incidunt ducimus eos accusantium inventore dolore iure rerum deleniti ab est consequatur!</p>
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
                        <input value="{{$userAuth}}" name="id_user" style="display: none;" id="id_user" type="number" class="form-control">
                        <input value="{{$datosPost[0]->id}}" name="id_post" style="display: none;" id="id_post" type="number" class="form-control">
                        <div class="input-group-append">
                          <button id="btnAddComentario" type="submit" class="btn btn-info">
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
            console.log(response)
            if(response == 'error'){
              $('#texto').attr('placeholder', 'Solo usuarios logeados pueden comentar');
              $( "#btnAddComentario" ).prop( "disabled", true );
              $('#texto').attr('readonly', true);
            }else{
              $('#texto').attr('placeholder', 'Escriba un comentario');
              $( "#btnAddComentario" ).prop( "disabled", false );
              $('#texto').attr('readonly', false);
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
                                <input value="{{$userAuth}}" name="id_user" style="display: none;" id="id_post" type="number" class="form-control">
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
                        $(`#addRespuesta-${element.id}`).trigger('reset');
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
            $("#addComentario").trigger('reset');
          }
        });
      });

    });
  </script>
@endsection