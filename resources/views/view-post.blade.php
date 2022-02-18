@extends('layouts.publico')
@section('contenido')
<br>
    <br>
    <div class="container">
        <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
            <li class="breadcrumb-item"><a class="text-primary" href="/">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/post">Bootstrap</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="/table">Table</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Table responsive</a></li>
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
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            </div>
            comentarios
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Timeline</h3>
                </div>
                <div class="card-body">
                  <ul class="list list-timeline">
                    <li>
                      <div class="list-timeline-icon bg-twitter"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">10 hrs ago</div>
                        <p class="list-timeline-title">+1150 Followers</p>
                        <p class="text-muted">You’re getting more and more followers, keep it up!</p>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon bg-red"><!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">2 hrs ago</div>
                        <p class="list-timeline-title">+3 New Products were added!</p>
                        <p class="text-muted">Congratulations!</p>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon bg-success"><!-- Download SVG icon from http://tabler-icons.io/i/check -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">1 day ago</div>
                        <p class="list-timeline-title">Database backup completed!</p>
                        <p class="text-muted">Download the <a href="#">latest backup</a>.</p>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon bg-facebook"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">1 day ago</div>
                        <p class="list-timeline-title">+290 Page Likes</p>
                        <p class="text-muted">This is great, keep it up!</p>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon bg-teal"><!-- Download SVG icon from http://tabler-icons.io/i/user-plus -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">2 days ago</div>
                        <p class="list-timeline-title">+3 Friend Requests</p>
                        <div class="avatar-list mt-3">
                          <span class="avatar" style="background-image: url(...)">
                            <span class="badge bg-success"></span></span>
                          <span class="avatar">
                            <span class="badge bg-success"></span>JL</span>
                          <span class="avatar" style="background-image: url(...)">
                            <span class="badge bg-success"></span></span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon bg-yellow"><!-- Download SVG icon from http://tabler-icons.io/i/photo -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">3 days ago</div>
                        <p class="list-timeline-title">+2 New photos</p>
                        <div class="mt-3">
                          <div class="row g-2">
                            <div class="col-6">
                              <div class="media media-2x1 rounded">
                                <a class="media-content" style="background-image: url(...)"></a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="media media-2x1 rounded">
                                <a class="media-content" style="background-image: url(...)"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="list-timeline-icon"><!-- Download SVG icon from http://tabler-icons.io/i/settings -->
                        <!-- SVG icon code -->
                      </div>
                      <div class="list-timeline-content">
                        <div class="list-timeline-time">2 weeks ago</div>
                        <p class="list-timeline-title">System updated to v2.02</p>
                        <p class="text-muted">Check the complete changelog at the <a href="#">activity
                            page</a>.</p>
                      </div>
                    </li>
                  </ul>
                  <div class="row">
                    <div class="col-md-8">
                      <input type="text" name="" id="" class="form-control" placeholder="Comentar">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-info">Comentar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection